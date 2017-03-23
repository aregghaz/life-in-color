<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
</head>
<style>
    #table_class {
        width: 1200px;
        margin: 0 auto;
        font-size: 11px;

    }

    p {
        margin: 10px auto;
        display: table;
        border: 1px solid black;
        padding: 10px;

    }

    #formVideo, #formVideo2,#formVideo3 {
        display: table;
        margin: 10px auto;
    }
</style>
<body>

<p>Partners</p>
<table class="ui celled table" id="table_class">
    <thead>
    <tr>
        <th>ID</th>
        <th>NameAM</th>
        <th>NameEN</th>
        <th>TextAM</th>
        <th>TextEN</th>
        <th>link</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php if ($partner) { ?>
        <?php foreach ($partner as $item): ?>
            <tr>

                <td><?= $item['id']; ?></td>
                <td><?= $item['nameAM']; ?></td>
                <td><?= $item['nameEN']; ?></td>
                <td><?= $item['textAM']; ?></td>
                <td><?= $item['textEN']; ?></td>
                <td><?= $item['link']; ?></td>
                <td>
                    <a href="<?php echo base_url()?>admin/del_articles_partner/<?php echo $item['id'] ?>">delete</a>
                </td>


            </tr>
        <? endforeach; ?>
    <? }; ?>
    </tbody>

</table>
<form action="<?php echo base_url()?>index.php/admin/add_partner" method="post" id="formVideo">
    <input placeholder="id" name="id" title="id">
    <input placeholder="nameAM" name="nameAM" title="headAM" required>
    <input placeholder="nameEN" name="nameEN" title="headEU" required>
    <input placeholder="textAM" name="textAM" title="textAM">
    <input placeholder="textEN" name="textEN" title="textEU">
    <input placeholder="link" name="link" title="link" required>

    <button type="submit" value="addd" name="addd">Add</button>

</form>
<p>Video</p>
<table class="ui selectable celled table" id="table_class">
    <thead>
    <tr>
        <th>ID</th>
        <th>NameAM</th>
        <th>NameEN</th>
        <th>TextAM</th>
        <th>TextEN</th>
        <th>link</th>
        <th>date</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php if ($video) { ?>
        <?php foreach ($video as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['headAM']; ?></td>
                <td><?= $item['headEN']; ?></td>
                <td><?= $item['textAM']; ?></td>
                <td><?= $item['textEN']; ?></td>
                <td><?= $item['link']; ?></td>
                <td><?= $item['date']; ?></td>
                <td>
                    <a href="<?php echo base_url()?>admin/del_articles_video/<?php echo $item['id'] ?>">delete</a>
                </td>

            </tr>
        <? endforeach; ?>
    <? }; ?>

    </tbody>
</table>

<form action="<?php echo base_url()?>admin/add_video" method="post" id="formVideo2">
    <input placeholder="id" name="id" title="id">
    <input placeholder="headAM" name="headAM" title="headAM" required>
    <input placeholder="headEN" name="headEN" title="headEU" required>
    <input placeholder="textAM" name="textAM" title="textAM">
    <input placeholder="textEN" name="textEN" title="textEU">
    <input placeholder="link" name="link" title="link" required>
    <button type="submit" value="add" name="add">Add</button>

</form>
<p>Education</p>
<table class="ui selectable celled table" id="table_class">
    <thead>
    <tr>
        <th>ID</th>
        <th>NameAM</th>
        <th>NameEN</th>
        <th>TextAM</th>
        <th>TextEN</th>
        <th>img</th>
        <th>iframeAM</th>
        <th>iframeEN</th>

    </tr>
    </thead>
    <tbody>
    <?php if ($education) { ?>
        <?php foreach ($education as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nameAM']; ?></td>
                <td><?= $item['nameEN']; ?></td>
                <td><?= $item['textAM']; ?></td>
                <td><?= $item['textEN']; ?></td>
                <td><?= $item['img']; ?></td>
                <td><?= $item['iframeAM']; ?></td>
                <td><?= $item['iframeEN']; ?></td>
                <td>
                 <a href="<?php echo base_url()?>admin/del_articles_education/<?php echo $item['id'] ?>" >delete</a>
                </td>

            </tr>
        <? endforeach; ?>
    <? }; ?>
    </tbody>
</table>

<form action="<?php echo base_url()?>admin/add_education" method="post" id="formVideo3" enctype="multipart/form-data">
    <input placeholder="id" name="id" title="id">
    <input placeholder="nameAM" name="nameAM" title="headAM" required>
    <input placeholder="nameEN" name="nameEN" title="headEU" required>
    <input placeholder="textAM" name="textAM" title="textAM" required>
    <input placeholder="textEN" name="textEN" title="textEU" required>
    <input placeholder="iframeAM" name="iframeAM" title="textEU" required>
    <input placeholder="iframeEN" name="iframeEN" title="textEU" required>
    <input placeholder="img" type="file" name="userfile" title="link">
    <button type="submit" value="add" name="add">Add</button>

</form>
</body>
</html>
