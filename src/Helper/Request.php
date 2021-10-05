<?php

namespace Helper;

class Request
{

    private string $type;
    private string $protocol = 'https';
    private string $host = 'iiko.biz';
    private string $port = '9900';
    private string $version = '0';
    private string $method;
    private ?array $header = [];
    private ?string $body = null;
    private array $parameters = [];
    private string $response;



    public function execute(){

        $url = "{$this->protocol}://{$this->host}:{$this->port}/api/{$this->version}/{$this->method}{$this->getParameters()}";

        $curl = curl_init();

        $curl_data = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->type,
        );

        if($this->getBody()){
            $curl_data[10015] = $this->getBody();
        }

        if($this->getHeader()){
            foreach ($this->getHeader() as $key => $value){
                $curl_data[10023][] = "$key: $value";
            }
        }

        curl_setopt_array($curl, $curl_data );
        $response = curl_exec($curl);
        curl_close($curl);


        $this->setResponse($response);
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    public function clearResponse(){
        return str_replace('"','',$this->response);
    }

    /**
     * @param string $response
     */
    public function setResponse(string $response): void
    {
        $this->response = $response;
    }




    public function toArray($associative = TRUE ){
        return json_decode($this->response,$associative);
    }




    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getParameters(): string
    {
        $parameters = "";
        foreach ($this->parameters as $key=>$parameter){
            if(!$parameters){
                $parameters .= "?{$key}=".urlencode($parameter);
            }else{
                $parameters .= "&{$key}=".urlencode($parameter);
            }
        }
        return $parameters;
    }



    /**
     * @param array $parameters
     */
    public function addParameter(string $key, $value): void
    {
        $this->parameters[$key] = $value;
    }




    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol): void
    {
        $this->protocol = $protocol;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort(string $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return array
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }


    public function addHeader($key,$value)
    {
        $this->header[$key] = $value;
    }

    /**
     * @return ?string
     */
    public function getBody():? string
    {
        return $this->body;
    }

    /**
     * @param ?string $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }




}