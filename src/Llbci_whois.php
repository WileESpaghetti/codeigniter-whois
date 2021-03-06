<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Llbci_whois {

    /**
     * Query a WhoIs server
     *
     * @param $domain
     * @param bool $fallback if set to TRUE then try cli_query() if other attempts fail
     *
     * @return string
     */
    public function query($domain, $fallback = FALSE)
    {
        // TODO find responsible WhoIs Server
        // TODO clean domain into a method the
        // TODO find best way to query server (HTTP or WhoIs Protocol), prefer HTTP
        // TODO query server
        return NULL;
    }

    /**
     * Make a WhoIs query using HTTP instead of the WhoIs Protocol
     *
     * prefer query() over calling this directly
     *
     * @param $domain
     * @param $server
     *
     * @return string
     */
    public function http_query($domain, $server)
    {
        return NULL;
    }

    /**
     * Make a WhoIs query using the WhoIs protocol
     *
     * prefer query() over calling this directly. This might fail if curl module not
     * installed or if web host has firewalled outbound port 43
     *
     * @param $domain
     * @param $server
     *
     * @return string
     *
     * @see https://tools.ietf.org/html/rfc3912
     */
    public function protocol_query($domain, $server)
    {
        $domain = preg_replace('/^(www\.)?/i', '', $domain); // FIXME need more accurate domain parsing to remove subdomains
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, $server);
        curl_setopt($request, CURLOPT_PORT, 43);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_TIMEOUT, 5);
        curl_setopt($request, CURLOPT_CUSTOMREQUEST, "$domain\r\n");
        $whois = curl_exec ($request);
        curl_close($request);

        // TODO handle curl errors
        // TODO sanitize $whois
        return $whois;
    }

    /**
     * Make a WhoIs query using the whois command
     *
     * @param $domain
     *
     * @return string
     *
     * @see https://tools.ietf.org/html/rfc3912
     */
    public function cli_query($domain)
    {

    }
}

/* End of file Llbci_whois.php */
