<?php namespace LuisMayta\Resume\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use LuisMayta\Resume\Models\Sitio;
use LuisMayta\Resume\Models\Idiomas;
use LuisMayta\Resume\Models\Educacion;
use LuisMayta\Resume\Models\Experiencia;
use LuisMayta\Resume\Models\Habilidades;
use LuisMayta\Resume\Models\DatosPersonales;

class Midata extends ComponentBase
{
     public function componentDetails()
    {
        return [
            'name' => 'luismayta.resume::lang.midata.name',
            'description' => 'luismayta.resume::lang.midata.description'
        ];
    }
    public function onRun()
    {
        $this->DatosPersonales();
        $this->DatosSitio();
        $this->DatosExperiencia();
        $this->DatosEducacion();
        $this->DatosHabilidades();
        $this->DatosIdiomas();
    }
    public function DatosPersonales()
    {
        $dp = DatosPersonales::first();
        if (!isset($dp)) {
            $dp = DatosPersonales::Create([
                'nombre_completo'=>'Adam Doe',
                'nombre_corto'=>'Adam Doe',
                'fecha_nacimiento'=>'21-05-1980',
                'estado_civil'=>'Casado',
                'perfil'=>'INFORMATION TECHNOLOGY & SERVICES',
                'slogan'=>'Chief Product Officer at Okler Themes',
                'descripcion_corta'=>'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
                'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida. Vivamus vitae dui non lorem euismod pretium. Morbi congue sem sed ex iaculis, nec mattis felis pretium. Nullam molestie libero id odio blandit sodales. Suspendisse non mauris et felis molestie placerat aliquet a risus. Aliquam ac leo tempus, hendrerit eros mollis, gravida est.

                Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.

                Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.'
            ]);
        }

        $dp['edad'] = Carbon::parse($dp->fecha_nacimiento)->age;
        $this->page['dp']  = $dp;
    }
    public function DatosSitio()
    {
        $sitio = Sitio::firstOrCreate(['titulo'=>'My resume']);
        $this->page['sitio'] = $sitio;
    }
    public function DatosExperiencia()
    {
        $experiencias = Experiencia::get();
        $this->page['experiencias'] = $experiencias;
    }
    public function DatosEducacion()
    {
        $educacion = Educacion::get();
        $this->page['educacion'] = $educacion;
    }
    public function DatosHabilidades()
    {
        $Habilidades = Habilidades::get();
        $this->page['habilidades'] = $Habilidades;
    }
    public function DatosIdiomas()
    {
        $Idiomas = Idiomas::get();
        $this->page['idiomas'] = $Idiomas;
    }

}
