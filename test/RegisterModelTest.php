<?php
use LALOC\models\RegisterModel;
use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;
class RegisterModelTest extends TestCase {
    private $dotenv;
    public function testRegister() {
        $this->dotenv = Dotenv::createImmutable(dirname("../"))->load();
        $registerModel = new RegisterModel();
        $pwd = password_hash($_ENV["TEST_REGISTER_PASSWORD"], PASSWORD_BCRYPT);
        $register = $registerModel->inscriptionModel("MR", "Pierre", "Durant", "17 Rue de PHPUnit", "PHPVille", "230000", "pierre.durant3@phpunitest.com", $pwd);
        $rows = $register->rowCount();
        
        $this->assertEquals(1, $rows);
    }
}
?>