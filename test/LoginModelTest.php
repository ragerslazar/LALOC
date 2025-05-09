<?php
use LALOC\models\LoginModel;
use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;

class LoginModelTest extends TestCase {
    private $loginModel;
    private $dotenv;

    public function setUp(): void {
        $this->loginModel = new LoginModel();
        $this->dotenv = Dotenv::createImmutable(dirname("../"))->load();
    }

    public function testLogin() {
        $res = $this->loginModel->connexionModel($_ENV["TEST_USERNAME"], $_ENV["TEST_PASSWORD"]);
        $this->assertNotNull($res);
        $this->assertArrayHasKey("email", $res[0]);
        $this->assertArrayHasKey("password", $res[0]);
    }

    public function testObjectCreation() {
        $this->assertNotNull($this->loginModel);
        $this->assertInstanceOf(LoginModel::class, $this->loginModel);
    }
}
?>