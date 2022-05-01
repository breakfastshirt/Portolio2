<?php

require ("Model/Model.php");


class Controller {

    function CreatedrinkDropdownList() {
        $Model = new Model();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a type: 
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($Model->GetdrinkTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateDrinkTables($types)
    {
        $Model = new Model();
        $drinkArray = $Model->GetdrinkByType($types);
        $result = "";
        

        foreach ($drinkArray as $key => $drink) 
        {
            $result = $result .
                    "<table class = 'drinkTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$drink->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$drink->name</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$drink->type</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$drink->price</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$drink->roast</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$drink->country</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$drink->review</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
        
    }

}

?>
