<?php

class ServiceTableSeeder extends Seeder {

    public function run()
    {
        Service::create(
        	array(
        		'title' => 'Web development',
        		'description' => 'PHP, MySQL, Javascript and more.'
        	)
        );

        Service::create(
        	array(
        		'title' => 'SEO',
        		'description' => 'Get on first page of search engines with our help.'
        	)
        );

        Service::create(
        	array(
        		'title' => 'Marketing',
        		'description' => 'Advertise with us.'
        	)
        );
    }
}