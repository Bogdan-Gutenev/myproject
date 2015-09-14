<?php
include 'logout.php';
?>
<table border="1" width="100%">
    <?php
    $arr = ['header', 'content', 'footer'];
    $menu = [
        "index"      => ['href' => 'site.php', 'title' => 'Index'],
        "main"       => ['href' => 'site.php?page=main', 'title' => 'Main'],
        "contacts"   => ['href'  => 'site.php?page=contacts',
                         'title' => 'Contacts'],
        'calculator' => ['href'  => 'site.php?page=calculator',
                         'title' => 'Calculator'],
        'multiple'   => ['href'  => 'site.php?page=multiple',
                         'title' => 'Multiple']
    ];
    foreach ($arr as $value) {

    ?>
    <tr align="center">
        <?php
        if ($value == "content") {
            ?>
            <td width="20%">
                <table border="1" width="100%">
                    <?php
                    foreach ($menu as $val) {
                        ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo $val['href']; ?>"><?php echo $val['title']; ?>
                            </td>
                            </a>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
            <td>
                <?php
                if (!empty($_GET)) {
                    include $_GET['page'] . '.php';
                }

                ?>
            </td>
        <?php
        } else {
            ?>
            <td colspan='2'><?php echo $value; ?></td>
        <?php
        }
        ?>
        <?php
        }
        ?>
    </tr>


</table>

