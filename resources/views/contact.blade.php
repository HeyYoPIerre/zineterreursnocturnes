@extends('layouts.app')

@section('content')
    <main>
        
        <div class="container special-text my-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-uppercase fw-bold mb-2">Contactez-nous</h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod quia, eum quas accusamus aliquid laborum
                    deserunt voluptatum perspiciatis, beatae commodi doloremque veniam. Non suscipit laboriosam omnis totam
                    odit, fugit in?
                    Dignissimos explicabo autem vero nostrum commodi, recusandae maiores quod sint. Odit molesti
                    Rerum dolorum ad aperiam eligendi. Odio odit in accusantium impedit aperiam ratione, temporibus fuga
                    voluptates asperiores? Quas labore tenetur exercitationem vero ex. Earum similique repellat temporibus
                    non asperiores voluptate quam?
                    Quia inventore, sapiente esse porro cum fuga eligendi facilis labore, rem mollitia quidem soluta,
                    reprehenderit amet eveniet neque atque officiis laboriosam! Doloribus modi cupiditate quis, laboriosam
                    sunt similique. Ad, voluptate?
                    Sint voluptas nihil, ratione odit ipsa blanditiis voluptatibus laborum possimus vero tempore officiis
                    delectus voluptatum et corrupti illum animi quasi! Odio nisi tempore minus ut doloremque iste optio
                    blanditiis illum.
                    Ipsum doloremque ipsam nihil omnis est quia id magni sunt, necessitatibus itaque adipisci fuga numquam
                    cupiditate doloribus, accusamus animi rerum repellat similique magnam delectus? Eligendi voluptatem quod
                    deserunt molestias distinctio!
                    Magnam architecto totam quod distinctio similique doloremque perspiciatis cum officia sequi voluptatum a
                    ut aut reiciendis ullam necessitatibus consectetur ex voluptate, eaque laborum odio excepturi quidem
                    aspernatur quae voluptatibus. Nesciunt!
                    sapiente. Rerum repudiandae eveniet accusamus nemo delectus esse, reiciendis ab eligendi minus, sint
                    iste dolorem ducimus.
                    Deleniti modi, recusandae reiciendis consectetur mollitia repudiandae deserunt numquam eos amet
                    voluptatem minima quas possimus magni voluptatum magnam. Omnis, impedit vero? Rerum saepe illum voluptas
                    voluptatum mollitia totam sed officia!
                    Soluta nihil incidunt repellendus recusandae a mollitia dignissimos hic accusamus molestiae nemo veniam
                    facere culpa quos quibusdam, doloribus et tempore corrupti. Fugit aperiam error delectus! Ipsum,
                    necessitatibus. Amet, ipsam. Adipisci!
                    Deleniti blanditiis iusto eaque libero eius iure officia, eveniet quae voluptates doloremque
                    perspiciatis. Iste tenetur nulla voluptates quis alias? Culpa, illo explicabo harum dolores qui
                    cupiditate nulla impedit ducimus error!
                </div>
            </div>
        </div>

        <div class="container my-5">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="p-5 shadow-lg rounded-4">
                @csrf

                <div class="row mb-4">
                    <div class="col">
                        <label for="name" class="form-label" style="font-weight: bold; color: white;">Nom :</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror p-3"
                            style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>
                        @error('name')
                            <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="form-label" style="font-weight: bold; color: white;">Email :</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror p-3"
                            style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>
                        @error('email')
                            <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label" style="font-weight: bold; color: white;">Message :</label>
                    <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror p-3"
                        style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                    @enderror
                </div>

                <input type="text" name="address" style="display:none">

                <div class="d-grid">
                    <button type="submit" class="btn btn-lg"
                        style="background-color: #white; border: none; border-radius: 30px; color: white; transition: all 0.3s ease;">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>

        <div class="container-fluid parallax-container">
            <div class="row">
                <div class="col p-0">
                    <div class="parallax-image">
                        <!-- Illustration -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
