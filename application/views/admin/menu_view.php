<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Menu with Role Permissions</title>
</head>
<body>
    <h2>hhhhhh eeee iiii gggg hhh tttttt</h2>
    <ul>
        <?php foreach ($menu_items as $item): ?>
            <?php if (has_permission($item['id'], $user_permissions)): ?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
