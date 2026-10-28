<!doctype html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Panoramica dello spazio di lavoro Gestio."
    />
    <title>Panoramica — Gestio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="app-page">
    <div class="app-background">
      <div class="story-ring story-ring-top"></div>
      <div class="story-ring story-ring-bottom"></div>

      <div class="container-fluid app-container">
        <div class="app-frame">
          <x-navbar>

          </x-navbar>

          <main class="app-content">
            <header class="app-topbar d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-3">
                <button
                  class="btn app-menu-button d-lg-none"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#mobileNavigation"
                  aria-controls="mobileNavigation"
                  aria-label="Apri navigazione"
                >
                  <svg viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M3 5h14M3 10h14M3 15h14"></path>
                  </svg>
                </button>
                <div>
                  <h1 class="app-page-title mb-0">Buongiorno, (metti nome con autenticazione)</h1>
                </div>
              </div>

              <div class="d-flex align-items-center gap-2">
                <button class="btn app-icon-button" type="button" aria-label="Notifiche">
                  <svg viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M4 14h12l-1.5-2V8a4.5 4.5 0 0 0-9 0v4L4 14ZM8 16.5h4"></path>
                  </svg>
                  <span class="notification-dot"></span>
                </button>
                <button class="btn btn-primary app-primary-action" type="button">
                  <span aria-hidden="true">+</span>
                  (Pulsante aggiungi servizio)
                </button>
              </div>
            </header>

            <div class="app-main">
              <div class="page-intro d-flex flex-wrap align-items-end justify-content-between gap-3">
                <div>
                  <span class="eyebrow accent d-block">(Data che cambia dinamicamente)</span>
                  <h2 class="mb-0">Panoramica servizi</h2>
                  <p class="mb-0">Ecco cosa sta succedendo oggi nella tua attività.</p>
                </div>
                <!-- <button class="btn app-secondary-action" type="button">
                  Esporta rapporto
                </button> -->
              </div>

              <!-- <section class="row g-3 app-stats" aria-label="Indicatori principali">
                <div class="col-sm-6 col-xl-3">
                  <article class="stat-card h-100">
                    <span class="stat-label">Fatturato mese</span>
                    <strong class="stat-value d-block">€ 148.320</strong>
                    <span class="stat-trend positive">+12,4%</span>
                    <small> vs mese scorso</small>
                  </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <article class="stat-card h-100">
                    <span class="stat-label">Ordini aperti</span>
                    <strong class="stat-value d-block">84</strong>
                    <span class="stat-trend positive">+7</span>
                    <small> da ieri</small>
                  </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <article class="stat-card h-100">
                    <span class="stat-label">Clienti attivi</span>
                    <strong class="stat-value d-block">1.204</strong>
                    <span class="stat-trend">−3</span>
                    <small> ultimi 30 gg</small>
                  </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <article class="stat-card stat-card-highlight h-100">
                    <span class="stat-label">Da riscuotere</span>
                    <strong class="stat-value d-block">€ 9.760</strong>
                    <span class="stat-trend positive">−2,1%</span>
                    <small> sul totale</small>
                  </article>
                </div>
              </section> -->

              <section class="content-card">
                <div class="content-card-header d-flex align-items-center justify-content-between">
                  <div>
                    <h3 class="mb-0">Ordini recenti</h3>
                    <p class="mb-0">Gli ultimi movimenti registrati</p>
                  </div>
                  <a href="#" class="card-link">Vedi tutti →</a>
                </div>

                <div class="table-responsive">
                  <table class="table app-table align-middle mb-0">
                    <thead>
                      <tr>
                        <th>Numero</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Totale</th>
                        <th>Stato</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="mono fw-medium">#ORD-8814</td>
                        <td>Tecnopipe S.r.l.</td>
                        <td>17 set 2026</td>
                        <td class="mono fw-medium">€ 4.280,00</td>
                        <td><span class="status-pill">Confermato</span></td>
                      </tr>
                      <tr>
                        <td class="mono fw-medium">#ORD-8813</td>
                        <td>Edilform Group</td>
                        <td>17 set 2026</td>
                        <td class="mono fw-medium">€ 11.940,00</td>
                        <td><span class="status-pill status-working">In lavorazione</span></td>
                      </tr>
                      <tr>
                        <td class="mono fw-medium">#ORD-8812</td>
                        <td>Studio Arco</td>
                        <td>16 set 2026</td>
                        <td class="mono fw-medium">€ 1.100,00</td>
                        <td><span class="status-pill status-shipped">Spedito</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </main>
        </div>
      </div>
    </div>

    <div
      class="offcanvas offcanvas-start app-mobile-nav"
      tabindex="-1"
      id="mobileNavigation"
      aria-labelledby="mobileNavigationLabel"
    >
      <div class="offcanvas-header">
        <span class="brand text-white" id="mobileNavigationLabel">Gestio<span>·</span></span>
        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="offcanvas"
          aria-label="Chiudi"
        ></button>
      </div>
      <div class="offcanvas-body">
        <nav class="app-nav nav flex-column">
          <a class="nav-link active" href="./panoramica.html">Panoramica</a>
          <a class="nav-link" href="#">Ordini</a>
          <a class="nav-link" href="#">Clienti</a>
          <a class="nav-link" href="#">Prodotti</a>
          <a class="nav-link" href="#">Fatture</a>
          <a class="nav-link" href="#">Rapporti</a>
        </nav>
      </div>
    </div>

    <script type="module" src="/src/main.js"></script>
  </body>
</html>
