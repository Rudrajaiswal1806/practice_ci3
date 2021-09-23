<h1>hello world</h1>
<h2><?php echo $title ?></h2>
<?php echo $this->session->flashdata('message') ?>
<br/><br/>
<?php echo base_url() ?><br/><br/>
<?php echo anchor('user/signup', 'Sign UP')?>
<br/>
<br/>
 <?php 
    // echo '<pre>';
    // print_r($allnews);
    // foreach($allnews as $news){
    //     echo $news ->username."<br/>";
    //     echo $news ->email."<br/>"."<br/>";
    // }    
?>
<table width="100%" border="1">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>Active</th>
        <th>UPDATE</th>
    </tr>
    <?php if (! empty($allnews)) { ?>
        <?php foreach($allnews as $news) { ?>
            <tr>
                <td><?php echo $news->id ?></td>
                <td><?php echo $news->username ?></td>
                <td><?php echo $news->email ?></td>
                <td><?php echo $news->active ?></td>
                <td>
                    <?php echo anchor ('news/edit/'.$news->id, 'Edit'."&nbsp;&nbsp;&nbsp;") ?>
                    <?php echo anchor ('news/delete/'.$news->id, 'Delete') ?>
                    <?php echo anchor ('news/details/'.$news->id, 'Details') ?>
                </td>
            </tr>
        <?php } ?>
    <?php } else {?>
        <tr>
            <td colspan="6">No records.</td>
        </tr>
    <?php }?>
</table> 