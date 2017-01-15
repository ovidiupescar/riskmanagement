
<h2><?php echo 'Create risk '.$risk; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('risks/autogenerate'); ?>
    
    <label for="number_of_records">Number of records to be generated</label>
    <input type="input" name="number_of_records" /><br />
    
    <input type="submit" name="submit" value="Generate" />

</form>

