<?php

class Plugin_Random_team_member extends Plugin
{
    public $name = array( 'en' => 'Random Team Member' );
    public $version = '1.0.0';
    public $description = array( 'en' => 'Select a random team member' );

    public function pick()
    {
        $parent_slug = $this->attribute('parent_slug', 'team');

        $parent_id = $this->db->select('id')
                              ->where('slug', $parent_slug)
                              ->get('pages')
                              ->row('id');
        $random_id = $this->db->select('id')
                              ->where('parent_id', $parent_id)
                              ->order_by('RAND()')
                              ->limit(1)
                              ->get('pages')
                              ->row('id');

        $random_page = $this->page_m->get($random_id);
        $random_page->url = site_url($random_page->uri);

        return array( $random_page );
    }
}