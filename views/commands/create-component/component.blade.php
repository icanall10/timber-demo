namespace App\View\Components;

class {{ $name }} extends ComponentBase
{
    @foreach($properties as $key => $property)
public ${{ $key }};
    @endforeach


    public function __construct({{ $constructorArguments }})
    {
    @foreach($properties as $key => $property)
    $this->{{ $key }} = ${{ $key }};
    @endforeach
}

    @foreach($properties as $key => $property)

    public function get{{ $property }}()
    {
        return $this->{{ $key }};
    }
    @endforeach

}