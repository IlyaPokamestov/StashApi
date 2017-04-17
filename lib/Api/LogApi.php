<?php
/**
 * LogApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Stash API
 *
 * REST-ish endpoint for interacting with Stash
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * LogApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LogApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return LogApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getLevel
     *
     * getLevel
     *
     * @param string $logger_name the name of the logger. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function getLevel($logger_name)
    {
        list($response) = $this->getLevelWithHttpInfo($logger_name);
        return $response;
    }

    /**
     * Operation getLevelWithHttpInfo
     *
     * getLevel
     *
     * @param string $logger_name the name of the logger. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLevelWithHttpInfo($logger_name)
    {
        // verify the required parameter 'logger_name' is set
        if ($logger_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $logger_name when calling getLevel');
        }
        // parse inputs
        $resourcePath = "/api/1.0/logs/logger/{loggerName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($logger_name !== null) {
            $resourcePath = str_replace(
                "{" . "loggerName" . "}",
                $this->apiClient->getSerializer()->toPathValue($logger_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/api/1.0/logs/logger/{loggerName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRootLevel
     *
     * getRootLevel
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function getRootLevel()
    {
        list($response) = $this->getRootLevelWithHttpInfo();
        return $response;
    }

    /**
     * Operation getRootLevelWithHttpInfo
     *
     * getRootLevel
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRootLevelWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/api/1.0/logs/rootLogger";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/api/1.0/logs/rootLogger'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setLevel
     *
     * setLevel
     *
     * @param string $level_name the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR (required)
     * @param string $logger_name the name of the logger. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return object
     */
    public function setLevel($level_name, $logger_name)
    {
        list($response) = $this->setLevelWithHttpInfo($level_name, $logger_name);
        return $response;
    }

    /**
     * Operation setLevelWithHttpInfo
     *
     * setLevel
     *
     * @param string $level_name the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR (required)
     * @param string $logger_name the name of the logger. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function setLevelWithHttpInfo($level_name, $logger_name)
    {
        // verify the required parameter 'level_name' is set
        if ($level_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $level_name when calling setLevel');
        }
        // verify the required parameter 'logger_name' is set
        if ($logger_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $logger_name when calling setLevel');
        }
        // parse inputs
        $resourcePath = "/api/1.0/logs/logger/{loggerName}/{levelName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($level_name !== null) {
            $resourcePath = str_replace(
                "{" . "levelName" . "}",
                $this->apiClient->getSerializer()->toPathValue($level_name),
                $resourcePath
            );
        }
        // path params
        if ($logger_name !== null) {
            $resourcePath = str_replace(
                "{" . "loggerName" . "}",
                $this->apiClient->getSerializer()->toPathValue($logger_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/1.0/logs/logger/{loggerName}/{levelName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setRootLevel
     *
     * setRootLevel
     *
     * @param string $level_name the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return object
     */
    public function setRootLevel($level_name)
    {
        list($response) = $this->setRootLevelWithHttpInfo($level_name);
        return $response;
    }

    /**
     * Operation setRootLevelWithHttpInfo
     *
     * setRootLevel
     *
     * @param string $level_name the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function setRootLevelWithHttpInfo($level_name)
    {
        // verify the required parameter 'level_name' is set
        if ($level_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $level_name when calling setRootLevel');
        }
        // parse inputs
        $resourcePath = "/api/1.0/logs/rootLogger/{levelName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($level_name !== null) {
            $resourcePath = str_replace(
                "{" . "levelName" . "}",
                $this->apiClient->getSerializer()->toPathValue($level_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/1.0/logs/rootLogger/{levelName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
