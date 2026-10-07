<?php
declare(strict_types=1);

namespace Core\Model;

abstract class Repository
{
    /**
     * @return string
     */
    abstract public function getEntityClass(): string;
    
    /**
     * @param \PDO $db
     */
    public function __construct(public readonly \PDO $db)
    {}
    
    /**
     * @param string $query
     * @param array $params
     * @return object
     */
    protected function findOne(string $query, array $params = []): ?object
    {
        $stmt = $this->prepare($query, $params);
        $stmt->execute();
        $class = $this->getEntityClass();
        $params = $stmt->fetch(\PDO::FETCH_ASSOC);
        return !!$params ? new $class(...$params) : null;
    }
    
    /**
     * @param string $query
     * @param array $params
     * @return iterable
     */
    protected function findMany(string $query, array $params = []): iterable
    {
        $stmt = $this->prepare($query, $params);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $class = $this->getEntityClass();
        foreach ($stmt as $params) {
            yield new $class(...$params);
        }
    }
    
    /**
     * @param string $query
     * @param array $params
     * @return mixed
     */
    protected function findScalar(string $query, array $params = []): mixed
    {
        $stmt = $this->prepare($query, $params);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    
    /**
     * @param string $query
     * @param array $params
     * @return bool
     */
    protected function execute(string $query, array $params = []): bool
    {
        $stmt = $this->prepare($query, $params);
        return $stmt->execute();
    }
    
    /**
     * @param string $query
     * @param array $params
     * @return \PDOStatement
     */
    protected function prepare(string $query, array $params = []): \PDOStatement
    {
        $stmt = $this->db->prepare($query);
        $this->bindParams($stmt, $params);
        return $stmt;
    }
    
    /**
     * @param \PDOStatement $stmt
     * @param array $params
     */
    protected function bindParams(\PDOStatement $stmt, array $params = [])
    {
        foreach ($params as $key => $value) {
            $key = is_integer($key) ? ($key + 1) : ":{$key}";
            $stmt->bindValue($key, $value, match(gettype($value)) {
                'boolean' => \PDO::PARAM_BOOL,
                'integer' => \PDO::PARAM_INT,
                'string' => \PDO::PARAM_STR,
            });
        }
    }
}