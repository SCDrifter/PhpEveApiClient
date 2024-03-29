<?php
/**
 * SearchApi
 * PHP version 5
 *
 * @category Class
 * @package  EveClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EveClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EveClient\ApiException;
use EveClient\Configuration;
use EveClient\HeaderSelector;
use EveClient\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  EveClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCharactersCharacterIdSearch
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \EveClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EveClient\Model\GetCharactersCharacterIdSearchOk
     */
    public function getCharactersCharacterIdSearch($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false', $token = null)
    {
        list($response) = $this->getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \EveClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EveClient\Model\GetCharactersCharacterIdSearchOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false', $token = null)
    {
        $returnType = '\EveClient\Model\GetCharactersCharacterIdSearchOk';
        $request = $this->getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\GetCharactersCharacterIdSearchOk',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\Forbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\ErrorLimited',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\GatewayTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdSearchAsync
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdSearchAsync($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false', $token = null)
    {
        return $this->getCharactersCharacterIdSearchAsyncWithHttpInfo($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCharactersCharacterIdSearchAsyncWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdSearchAsyncWithHttpInfo($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false', $token = null)
    {
        $returnType = '\EveClient\Model\GetCharactersCharacterIdSearchOk';
        $request = $this->getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCharactersCharacterIdSearch'
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false', $token = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null || (is_array($categories) && count($categories) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $categories when calling getCharactersCharacterIdSearch'
            );
        }
        if (count($categories) > 11) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be less than or equal to 11.');
        }
        if (count($categories) < 1) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be greater than or equal to 1.');
        }

        // verify the required parameter 'character_id' is set
        if ($character_id === null || (is_array($character_id) && count($character_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $character_id when calling getCharactersCharacterIdSearch'
            );
        }
        if ($character_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling getCharactersCharacterIdSearch'
            );
        }
        if (strlen($search) < 3) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 3.');
        }


        $resourcePath = '/v3/characters/{character_id}/search/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($categories)) {
            $queryParams['categories'] = $categories;
        } else
        if ($categories !== null) {
            $queryParams['categories'] = ObjectSerializer::toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = ObjectSerializer::toQueryValue($strict);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                '{' . 'character_id' . '}',
                ObjectSerializer::toPathValue($character_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSearch
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     *
     * @throws \EveClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EveClient\Model\GetSearchOk
     */
    public function getSearch($categories, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false')
    {
        list($response) = $this->getSearchWithHttpInfo($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict);
        return $response;
    }

    /**
     * Operation getSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     *
     * @throws \EveClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EveClient\Model\GetSearchOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSearchWithHttpInfo($categories, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false')
    {
        $returnType = '\EveClient\Model\GetSearchOk';
        $request = $this->getSearchRequest($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\GetSearchOk',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\ErrorLimited',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EveClient\Model\GatewayTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSearchAsync
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchAsync($categories, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false')
    {
        return $this->getSearchAsyncWithHttpInfo($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSearchAsyncWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchAsyncWithHttpInfo($categories, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false')
    {
        $returnType = '\EveClient\Model\GetSearchOk';
        $request = $this->getSearchRequest($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSearch'
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to en)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en)
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSearchRequest($categories, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = 'false')
    {
        // verify the required parameter 'categories' is set
        if ($categories === null || (is_array($categories) && count($categories) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $categories when calling getSearch'
            );
        }
        if (count($categories) > 10) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getSearch, number of items must be less than or equal to 10.');
        }
        if (count($categories) < 1) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getSearch, number of items must be greater than or equal to 1.');
        }

        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling getSearch'
            );
        }
        if (strlen($search) < 3) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getSearch, must be bigger than or equal to 3.');
        }


        $resourcePath = '/v2/search/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($categories)) {
            $queryParams['categories'] = $categories;
        } else
        if ($categories !== null) {
            $queryParams['categories'] = ObjectSerializer::toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = ObjectSerializer::toQueryValue($strict);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
