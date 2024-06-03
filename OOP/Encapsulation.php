class Cat
{
    private $name;
    public $color;
    public $weight;

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$cat1 = new Cat();
$cat1->setName('Снежок');
echo $cat1->getName();