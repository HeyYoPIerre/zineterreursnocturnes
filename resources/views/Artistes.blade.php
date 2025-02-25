@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="text-center text-uppercase fw-bold mb-2">CECI EST UN TITRE</h2>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod quia, eum quas accusamus aliquid laborum deserunt voluptatum perspiciatis, beatae commodi doloremque veniam. Non suscipit laboriosam omnis totam odit, fugit in?
        Dignissimos explicabo autem vero nostrum commodi, recusandae maiores quod sint. Odit molestiae recusandae officiis dolorem aperiam, omnis quasi repudiandae consequuntur. Hic enim obcaecati nulla sunt autem eos placeat unde alias.
        Totam quam voluptate aliquam laborum excepturi. Possimus, eius facere ducimus soluta et cupiditate inventore temporibus odit nostrum? Numquam dicta ipsa sunt eius dolorem eligendi, fuga illum quisquam reiciendis repellendus libero!
        Modi id, soluta, iure voluptates libero atque, sunt sint repellat est laborum quis. Maiores, molestias enim nulla inventore voluptatem est, modi accusamus, harum distinctio porro consectetur nobis esse? Porro, voluptate?
        Aperiam sint tempore soluta voluptate dolor aliquid inventore beatae sequi animi modi, quod recusandae qui doloremque pariatur? Voluptates quasi blanditiis, amet ex beatae totam, corporis cumque modi accusantium in consequuntur!
        Culpa, suscipit mollitia velit totam eius ex quo rem voluptate odit nisi nesciunt voluptatum quos necessitatibus, sit, exercitationem illo numquam obcaecati recusandae quaerat. Cumque nisi consequuntur laborum earum rerum est?
        Rerum dolorum ad aperiam eligendi. Odio odit in accusantium impedit aperiam ratione, temporibus fuga voluptates asperiores? Quas labore tenetur exercitationem vero ex. Earum similique repellat temporibus non asperiores voluptate quam?
        Quia inventore, sapiente esse porro cum fuga eligendi facilis labore, rem mollitia quidem soluta, reprehenderit amet eveniet neque atque officiis laboriosam! Doloribus modi cupiditate quis, laboriosam sunt similique. Ad, voluptate?
        Sint voluptas nihil, ratione odit ipsa blanditiis voluptatibus laborum possimus vero tempore officiis delectus voluptatum et corrupti illum animi quasi! Odio nisi tempore minus ut doloremque iste optio blanditiis illum.
        Ipsum doloremque ipsam nihil omnis est quia id magni sunt, necessitatibus itaque adipisci fuga numquam cupiditate doloribus, accusamus animi rerum repellat similique magnam delectus? Eligendi voluptatem quod deserunt molestias distinctio!
        Magnam architecto totam quod distinctio similique doloremque perspiciatis cum officia sequi voluptatum a ut aut reiciendis ullam necessitatibus consectetur ex voluptate, eaque laborum odio excepturi quidem aspernatur quae voluptatibus. Nesciunt!
        Deserunt suscipit ex iure quibusdam possimus amet quos quidem fugiat eveniet placeat veritatis at magnam doloremque, animi commodi voluptates molestiae incidunt dolores illum nihil quaerat ab ratione quas. Labore, aperiam!
        Beatae, sint quibusdam. Doloremque non eligendi accusantium eius, quae eveniet eos amet cum ad nisi repudiandae veniam, inventore tempora debitis beatae, necessitatibus temporibus voluptatum. Eos ipsa asperiores nemo assumenda tempora!
        Eaque libero mollitia, exercitationem iusto totam deleniti odio autem, sapiente explicabo molestias officia deserunt excepturi sint placeat et earum facilis! Reiciendis dolorem alias veniam fugiat illum natus dolores in doloremque?
        Obcaecati optio iste odit ut necessitatibus fugit facere molestias provident quos, dolore quod et laboriosam culpa expedita praesentium distinctio sint aliquam voluptatum veritatis corporis veniam quibusdam illum suscipit. Molestias, beatae.
        Quae libero, sit minima optio deleniti aliquam temporibus eligendi odio consequuntur soluta voluptatibus voluptas neque corporis odit dolorem, unde harum error accusantium fugit deserunt consequatur eveniet! Vel nobis in omnis.
        Eum fugit officiis natus nisi dolorem. Officiis, accusamus ab nesciunt dolorum facilis placeat quia sapiente. Rerum repudiandae eveniet accusamus nemo delectus esse, reiciendis ab eligendi minus, sint iste dolorem ducimus.
        Deleniti modi, recusandae reiciendis consectetur mollitia repudiandae deserunt numquam eos amet voluptatem minima quas possimus magni voluptatum magnam. Omnis, impedit vero? Rerum saepe illum voluptas voluptatum mollitia totam sed officia!
        Soluta nihil incidunt repellendus recusandae a mollitia dignissimos hic accusamus molestiae nemo veniam facere culpa quos quibusdam, doloribus et tempore corrupti. Fugit aperiam error delectus! Ipsum, necessitatibus. Amet, ipsam. Adipisci!
        Deleniti blanditiis iusto eaque libero eius iure officia, eveniet quae voluptates doloremque perspiciatis. Iste tenetur nulla voluptates quis alias? Culpa, illo explicabo harum dolores qui cupiditate nulla impedit ducimus error!
        </div>
    </div>
</div>

<div class="container">

    @foreach($artistes as $artiste)
    <div class="row align-items-center mb-4 border-bottom pb-3">

        <div class="col-md-6">
            <h3>{{ $artiste->nom }}</h3>
            <p>{{ $artiste->description }}</p>
        </div>

        <div class="col-md-6">
            @if($artiste->images->count() > 0)
            <div id="carousel{{ $artiste->id }}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($artiste->images as $key => $image)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ 'data:image/jpeg;base64,' . $image->base64 }}" alt="Image de {{ $artiste->nom }}" class="img-fluid" style="max-width: 200px;">
                        </div>
                    @endforeach
                </div>

                @if($artiste->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                @endif
            </div>
            @else
                <p>Aucune image disponible</p>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection