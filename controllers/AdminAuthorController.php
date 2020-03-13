<?php


class AdminAuthorController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $authorsList = Author::getAuthorsListAdmin();

        require_once(ROOT . '/views/admin_author/index.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];

            $errors = false;

            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
                Author::createAuthor($name);

                header("Location: /admin/author");
            }
        }

        require_once(ROOT . '/views/admin_author/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $author = Author::getAuthorById($id);

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];

            Author::updateAuthorById($id, $name);

            header("Location: /admin/author");
        }

        require_once(ROOT . '/views/admin_author/update.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Author::deleteAuthorById($id);

            header("Location: /admin/author");
        }

        require_once(ROOT . '/views/admin_author/delete.php');
        return true;
    }

}
