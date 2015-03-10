<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Llbci_whois {

    /**
     * Query a WhoIs server
     *
     * @param $domain
     * @return string
     */
    public function query($domain, $fallback = FALSE)
    {
        // TODO find responsible WhoIs Server
        // TODO find best way to query server (HTTP or WhoIs Protocol), prefer HTTP
        // TODO query server
        return NULL;
    }

    /**
     * Make a WhoIs query using HTTP instead of the WhoIs Protocol
     * @param $domain
     * @param $server
     */
    public function http_query($domain, $server)
    {

    }

    /**
     * Make a WhoIs query using the WhoIs protocol
     *
     * @param $domain
     * @param $server
     *
     * @see https://tools.ietf.org/html/rfc3912
     */
    public function protocol_query($domain, $server)
    {

    }

    /**
     * Make a WhoIs query using the whois command
     *
     * @param $domain
     *
     * @see https://tools.ietf.org/html/rfc3912
     */
    public function cli_query($domain)
    {

    }
}

/* End of file Llbci_whois.php */
