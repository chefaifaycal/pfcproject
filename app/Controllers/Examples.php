<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class Examples extends BaseController
{
	public function customers_management()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('users');
        $crud->setTheme('datatables');
	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

	

    public function services_management () {
        $crud = new GroceryCrud();

        $crud->setTheme('datatables');
        $crud->setTable('services');
        $crud->setSubject('Service');
        

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    public function images_management() {
        $crud = new GroceryCrud();

        $crud->setTable('images');
        $crud->setSubject('image');
        $crud->setTheme('datatables');
        

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    public function avis_management()
    {
        $crud = new GroceryCrud();

        $crud->setTheme('datatables');
        $crud->setTable('avis');
        $crud->setSubject('Avis');

       

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    public function categories_management()
    {
        $crud = new GroceryCrud();

        $crud->setTheme('datatables');
        $crud->setTable('categories');
        $crud->setSubject('Categorie');

       

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    public function film_management()
    {
        $crud = new GroceryCrud();

        $crud->setTable('film');
        $crud->setRelationNtoN('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname');
        $crud->setRelationNtoN('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
        $crud->unsetColumns(['special_features','description','actors']);

        $crud->fields(['title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features']);

        $output = $crud->render();

        return $this->_exampleOutput($output);
    }


    private function _exampleOutput($output = null) {
        return view('example', (array)$output);
    }


}
