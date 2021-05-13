<?php
/**
 * CyclesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides a free REST-like API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:  - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io)) - Edo2net: `https://api.edo2net.tzkt.io/` ([view docs](https://api.edo2net.tzkt.io)) - Florencenet: `https://api.florencenet.tzkt.io/` ([view docs](https://api.florencenet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io)) - Edo2net staging: `https://staging.api.edo2net.tzkt.io/` ([view docs](https://staging.api.edo2net.tzkt.io))      Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Email: hello@baking-bad.org - Twitter: https://twitter.com/TezosBakingBad - Telegram: [tg://resolve?domain=baking_bad_chat](tg://resolve?domain=baking_bad_chat) - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you should mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: v1.5
 * Contact: hello@baking-bad.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Bzzhh\Tzkt\ApiException;
use Bzzhh\Tzkt\Configuration;
use Bzzhh\Tzkt\HeaderSelector;
use Bzzhh\Tzkt\ObjectSerializer;

/**
 * CyclesApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CyclesApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cyclesGet
     *
     * Get cycles
     *
     * @param  OneOfInt32Parameter $snapshot_index Filters cycles by snapshot index (0..15) (optional)
     * @param  OneOfSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  OneOfSortParameter $sort Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). (optional)
     * @param  OneOfOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Cycle[]
     */
    public function cyclesGet($snapshot_index = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null)
    {
        list($response) = $this->cyclesGetWithHttpInfo($snapshot_index, $select, $sort, $offset, $limit, $quote);
        return $response;
    }

    /**
     * Operation cyclesGetWithHttpInfo
     *
     * Get cycles
     *
     * @param  OneOfInt32Parameter $snapshot_index Filters cycles by snapshot index (0..15) (optional)
     * @param  OneOfSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  OneOfSortParameter $sort Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). (optional)
     * @param  OneOfOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Cycle[], HTTP status code, HTTP response headers (array of strings)
     */
    public function cyclesGetWithHttpInfo($snapshot_index = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null)
    {
        $request = $this->cyclesGetRequest($snapshot_index, $select, $sort, $offset, $limit, $quote);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Cycle[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Cycle[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Cycle[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Bzzhh\Tzkt\Model\Cycle[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cyclesGetAsync
     *
     * Get cycles
     *
     * @param  OneOfInt32Parameter $snapshot_index Filters cycles by snapshot index (0..15) (optional)
     * @param  OneOfSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  OneOfSortParameter $sort Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). (optional)
     * @param  OneOfOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetAsync($snapshot_index = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null)
    {
        return $this->cyclesGetAsyncWithHttpInfo($snapshot_index, $select, $sort, $offset, $limit, $quote)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cyclesGetAsyncWithHttpInfo
     *
     * Get cycles
     *
     * @param  OneOfInt32Parameter $snapshot_index Filters cycles by snapshot index (0..15) (optional)
     * @param  OneOfSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  OneOfSortParameter $sort Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). (optional)
     * @param  OneOfOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetAsyncWithHttpInfo($snapshot_index = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null)
    {
        $returnType = '\Bzzhh\Tzkt\Model\Cycle[]';
        $request = $this->cyclesGetRequest($snapshot_index, $select, $sort, $offset, $limit, $quote);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cyclesGet'
     *
     * @param  OneOfInt32Parameter $snapshot_index Filters cycles by snapshot index (0..15) (optional)
     * @param  OneOfSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  OneOfSortParameter $sort Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). (optional)
     * @param  OneOfOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cyclesGetRequest($snapshot_index = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null)
    {
        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CyclesApi.cyclesGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CyclesApi.cyclesGet, must be bigger than or equal to 0.');
        }


        $resourcePath = '/v1/cycles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($snapshot_index !== null) {
            if('form' === 'form' && is_array($snapshot_index)) {
                foreach($snapshot_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['snapshotIndex'] = $snapshot_index;
            }
        }
        // query params
        if ($select !== null) {
            if('form' === 'form' && is_array($select)) {
                foreach($select as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['select'] = $select;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($quote !== null) {
            if('form' === 'form' && is_array($quote)) {
                foreach($quote as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['quote'] = $quote;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cyclesGetByIndex
     *
     * Get cycle by index
     *
     * @param  int $index Cycle index starting from zero (required)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Cycle
     */
    public function cyclesGetByIndex($index, $quote = null)
    {
        list($response) = $this->cyclesGetByIndexWithHttpInfo($index, $quote);
        return $response;
    }

    /**
     * Operation cyclesGetByIndexWithHttpInfo
     *
     * Get cycle by index
     *
     * @param  int $index Cycle index starting from zero (required)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Cycle, HTTP status code, HTTP response headers (array of strings)
     */
    public function cyclesGetByIndexWithHttpInfo($index, $quote = null)
    {
        $request = $this->cyclesGetByIndexRequest($index, $quote);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Cycle' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Cycle', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Cycle';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Bzzhh\Tzkt\Model\Cycle',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cyclesGetByIndexAsync
     *
     * Get cycle by index
     *
     * @param  int $index Cycle index starting from zero (required)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetByIndexAsync($index, $quote = null)
    {
        return $this->cyclesGetByIndexAsyncWithHttpInfo($index, $quote)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cyclesGetByIndexAsyncWithHttpInfo
     *
     * Get cycle by index
     *
     * @param  int $index Cycle index starting from zero (required)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetByIndexAsyncWithHttpInfo($index, $quote = null)
    {
        $returnType = '\Bzzhh\Tzkt\Model\Cycle';
        $request = $this->cyclesGetByIndexRequest($index, $quote);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cyclesGetByIndex'
     *
     * @param  int $index Cycle index starting from zero (required)
     * @param  OneOfSymbols $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cyclesGetByIndexRequest($index, $quote = null)
    {
        // verify the required parameter 'index' is set
        if ($index === null || (is_array($index) && count($index) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling cyclesGetByIndex'
            );
        }

        $resourcePath = '/v1/cycles/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($quote !== null) {
            if('form' === 'form' && is_array($quote)) {
                foreach($quote as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['quote'] = $quote;
            }
        }


        // path params
        if ($index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($index),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cyclesGetCount
     *
     * Get cycles count
     *
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function cyclesGetCount()
    {
        list($response) = $this->cyclesGetCountWithHttpInfo();
        return $response;
    }

    /**
     * Operation cyclesGetCountWithHttpInfo
     *
     * Get cycles count
     *
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function cyclesGetCountWithHttpInfo()
    {
        $request = $this->cyclesGetCountRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('int' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'int', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'int';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cyclesGetCountAsync
     *
     * Get cycles count
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetCountAsync()
    {
        return $this->cyclesGetCountAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cyclesGetCountAsyncWithHttpInfo
     *
     * Get cycles count
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyclesGetCountAsyncWithHttpInfo()
    {
        $returnType = 'int';
        $request = $this->cyclesGetCountRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cyclesGetCount'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cyclesGetCountRequest()
    {

        $resourcePath = '/v1/cycles/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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