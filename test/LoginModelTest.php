<?php
use LALOC\models\LoginModel;
use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;

class LoginModelTest extends TestCase {
    private $dotenv;

    public function testLogin() {
        $this->dotenv = Dotenv::createImmutable(dirname("../"))->load();
        $loginModel = new LoginModel();
        $res = $loginModel->connexionModel($_ENV["TEST_USERNAME"], $_ENV["TEST_PASSWORD"]);
        $this->assertNotNull($res);
    }

    public function testObjectCreation() {
        $loginModel = new LoginModel();
        $this->assertNotNull($loginModel);
        $this->assertInstanceOf(LoginModel::class, $loginModel);
    }
}
?>