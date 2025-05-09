<?php
use LALOC\models\RegisterModel;
use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;
class RegisterModelTest extends TestCase {
    private $dotenv;
    private $registerModel;

    public function setUp():void {
        $this->dotenv = Dotenv::createImmutable(dirname("../"))->load();
        $this->registerModel = new RegisterModel();

    }
    public function testRegister() {
        $pwd = password_hash($_ENV["TEST_REGISTER_PASSWORD"], PASSWORD_BCRYPT);
        $register = $this->registerModel->inscriptionModel("MR", "Pierre", "Durant", "17 Rue de PHPUnit", "PHPVille", "230000", $_ENV["TEST_REGISTER_EMAIL"], $pwd);
        $rows = $register->rowCount();
        
        $this->assertEquals(1, $rows);
    }
}
?>