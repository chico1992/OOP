<?php
// Create objects here

/*
 * Objective : have a class human with 5 properties :
 *   - name
 *   - age
 *   - gender
 *   - eye
 *   - hair
 *   
 * The gender property can only store 'male', 'female' or 'other'
 * The eye property can only store an object of type Eye.
 * The hair property can only store an object of type Hair.
 * 
 * The Eye object have two properties :
 *   - color
 *   - quality
 * 
 * The Hair property have two properties :
 *   - color
 *   - length
 */
if (isset($_POST['human'])) {
    require_once __DIR__.'/Human.php';
}




if (!empty($_POST)) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insert title here</title>
    </head>
    <body>
    
    	<form method="POST">
    		<fieldset>
        		<input type="text" name="human[name]" placeholder="name">
        		<input type="number" name="human[age]" placeholder="age">
        		<select name="human[gender]">
        			<option value="male">Male</option>
        			<option value="female">Female</option>
        			<option value="other">Other</option>
        		</select>
    		</fieldset>
    		
    		<fieldset>
        		<input type="text" name="human[eye][color]" placeholder="eye color">
        		<input type="text" name="human[eye][quality]" placeholder="eye quality">
    		</fieldset>
    		
    		<fieldset>
        		<input type="text" name="human[hair][color]" placeholder="hair color">
        		<input type="number" name="human[hair][length]" placeholder="hair length">
    		</fieldset>
    		
    		<button type="submit">Submit</button>
    	</form>
    
    </body>
</html>
