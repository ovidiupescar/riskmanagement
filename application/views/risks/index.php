<h2><?php echo $title; ?></h2>


<table id="risk_table" class="display" cellspacing="0">
    <thead>
    <tr>
        <td>
            ID
        </td>
        <td>
            Risk
        </td>
        <td>
            RPN
        </td>
        <td>
            Responsible
        </td>
        <td>
            Program
        </td>
        <td>
            Link
        </td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($risks as $risk_item): ?>
    <tr>
        <td>
        <a href="<?php echo site_url('risks/'.$risk_item['id']); ?>"><?php echo $risk_item['id']; ?></a>
        </td>
        <td>
        <?php echo $risk_item['potential_failure_mode']; ?>
        </td>
        <td>
        <?php echo $risk_item['RPN']; ?>
        </td>
        <td>
        <?php echo $risk_item['action_owner']; ?>
        </td>
        <td>
        <?php echo $risk_item['where_where']; ?>
        </td>
         <td>
        <?php echo $risk_item['task_id']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
    $('#risk_table').DataTable();
} );
</script>

<?php if ($page>1): ?>
<?php $prev = $page-1; ?>
<a href="<?php echo site_url('risks/index/'.$prev); ?>">Prev</a>
<?php endif; ?>
<br>
<?php $next = $page+1; ?>
<a href="<?php echo site_url('risks/index/'.$next); ?>">Next</a>
