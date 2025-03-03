<?php
namespace NexaMerchant\Shopify\Console\Commands\Product;

use Illuminate\Console\Command;

class CopyFromShopify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Shopify:product:copy-from-shopify {--url=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy products from Shopify to Nexa Merchant App --url=shopify-url';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //for test
        $url = $this->option('url');
        $this->info($url);
        // use $url to get products oembed from shopify
        $url .= '.oembed';
        $this->info($url);

        // use client to get products from shopify
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $content = json_decode($content, true);
        var_dump($content);

    }
}