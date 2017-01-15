
<h2><?php echo 'Create risk '.$risk; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('risks/create'); ?>
    
    <label for="where_where">Program / Application</label>
    <select name="where_where">
    <?php foreach ($programs as $program_item): ?>
    <option value="<?php echo $program_item['program'];?>" ><?php echo $program_item['program'];?></option> 
    <?php endforeach; ?>
    </select> <br />

    <label for="what_what">Process / Feature</label>
    <textarea name="what_what"></textarea><br />
    
    <label for="potential_failure_mode">Potential failure</label>
    <textarea name="potential_failure_mode"></textarea><br />
    
    <label for="effect">Effect</label>
    <textarea name="effect"></textarea><br />
    
    <label for="severity"> Severity </label>
    insignificant
    <input type="radio" name="severity" value="1"> 1
    <input type="radio" name="severity" value="2"> 2
    <input type="radio" name="severity" value="3"> 3
    <input type="radio" name="severity" value="4"> 4
    <input type="radio" name="severity" value="5"> 5
    <input type="radio" name="severity" value="6"> 6
    <input type="radio" name="severity" value="7"> 7
    <input type="radio" name="severity" value="8"> 8
    <input type="radio" name="severity" value="9"> 9
    <input type="radio" name="severity" value="10"> 10
    catastrophic
    <br>
    
    <label for="why">Potential Causes</label>
    <textarea name="why"></textarea><br />
    
    <label for="occurrence"> Occurrence </label>
    never
    <input type="radio" name="occurrence" value="1"> 1
    <input type="radio" name="occurrence" value="2"> 2
    <input type="radio" name="occurrence" value="3"> 3
    <input type="radio" name="occurrence" value="4"> 4
    <input type="radio" name="occurrence" value="5"> 5
    <input type="radio" name="occurrence" value="6"> 6
    <input type="radio" name="occurrence" value="7"> 7
    <input type="radio" name="occurrence" value="8"> 8
    <input type="radio" name="occurrence" value="9"> 9
    <input type="radio" name="occurrence" value="10"> 10
    always
    <br>
    
    <label for="current_control">Current Control</label>
    <textarea name="current_control"></textarea><br />

    <label for="detection"> Detection </label>
     will be detected
    <input type="radio" name="detection" value="1"> 1
    <input type="radio" name="detection" value="2"> 2
    <input type="radio" name="detection" value="3"> 3
    <input type="radio" name="detection" value="4"> 4
    <input type="radio" name="detection" value="5"> 5
    <input type="radio" name="detection" value="6"> 6
    <input type="radio" name="detection" value="7"> 7
    <input type="radio" name="detection" value="8"> 8
    <input type="radio" name="detection" value="9"> 9
    <input type="radio" name="detection" value="10"> 10
    will not be detected
    <br>
    
    <label for="actions_recommended">Actions Recommended to reduce risk</label>
    <textarea name="actions_recommended"></textarea><br />
    
    <label for="action_owner">Actions Owner</label>
    <textarea name="action_owner"></textarea><br />
    
    <label for="task_id">Reference link to task manager – CAPA number</label>
    <input type="input" name="task_id" /><br />
    
    
    
    <input type="submit" name="submit" value="Create a new Risk" />

</form>

