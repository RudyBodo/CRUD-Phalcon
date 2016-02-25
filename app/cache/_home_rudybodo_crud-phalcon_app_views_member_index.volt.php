<div class="page-header">
    <h1>List Member</h1>
</div>
<?php if ($member) { ?>
  <?php foreach ($datas as $data) { ?>
    <p><?php echo $datas->name; ?></p>
  <?php } ?>
<?php } else { ?> Data Empty
<?php } ?>
<p></p>
