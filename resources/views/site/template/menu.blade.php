<style scoped>
</style>

<section>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Danilo Santos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" aria-current="page">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contato') }}" aria-current="page">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</section>
