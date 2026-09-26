<x-authLayout>
       <main class="container-fluid min-vh-100 p-0">
      <div class="row g-0 min-vh-100">
          <section
          class="col-lg-5 d-none d-lg-flex login-story"
          aria-label="Presentazione Gestio"
          >
          <div class="story-ring story-ring-top"></div>
          <div class="story-ring story-ring-bottom"></div>
          
          <div class="d-flex flex-column w-100 position-relative story-content">
              <div class="brand text-white">Pulsar<span>·</span></div>
              
              <div class="my-auto story-message">
              <span class="eyebrow d-block">Benvenuto in </span>
              <h1 class="display-title text-white mb-0">
                  PULSAR
                </h1>
                <p class="story-copy mb-0">
                Ordini, clienti e fatture in un unico gestionale, progettato
                per rendere semplice ogni giornata.
            </p>
        </div>
          </div>
        </section>
        
        <section
        class="col-12 col-lg-7 d-flex align-items-center justify-content-center login-access"
        >
          <div class="login-panel w-100">
            <div class="brand mobile-brand d-lg-none">
                Gestio<span>·</span>
            </div>
            
            <header class="login-heading">
              <span class="eyebrow accent d-block">Benvenuto</span>
              <h2 class="mb-0">Crea il tuo account</h2>
              <p class="mb-0">Inserisci le tue credenziali per continuare.</p>
            </header>
            
            <div
            id="loginAlert"
            class="alert alert-success d-none"
            role="status"
            >
            Accesso effettuato correttamente.
        </div>
        
            <form id="loginForm" novalidate>
                <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" aria-hidden="true">
                        <svg viewBox="0 0 20 20">
    <circle cx="10" cy="7" r="3.25"></circle>
    <path d="M4 17c.5-4 2.8-6 6-6s5.5 2 6 6"></path>
</svg>
                </span>
                <input
                id="name"
                name="name"
                type="text"
                class="form-control"
                    placeholder="Giovanni"
                    
                    required
                    autofocus
                    />
                    <div class="invalid-feedback">
                        Inserisci un nome valido.
                  </div>
                </div>
            </div>
                
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" aria-hidden="true">
                        <svg viewBox="0 0 20 20">
                            <rect x="2.5" y="4" width="15" height="12" rx="2"></rect>
                            <path d="m3 5 7 5 7-5"></path>
                    </svg>
                </span>
                <input
                id="email"
                name="email"
                type="email"
                class="form-control"
                    placeholder="esempio@mail.it"
                    
                    required
                    autofocus
                    />
                    <div class="invalid-feedback">
                        Inserisci un indirizzo email valido.
                  </div>
                </div>
            </div>
            
              <div class="d-flex justify-content-between align-items-center">
                <label for="password" class="form-label">Password</label>
                <button class="btn btn-link login-link" type="button">
                  Password dimenticata?
                </button>
            </div>
            <div class="input-group has-validation">
              <span class="input-group-text" aria-hidden="true">
                <svg viewBox="0 0 20 20">
                  <rect
                    x="3.5"
                    y="8.5"
                    width="13"
                    height="9"
                    rx="2"
                  ></rect>
                  <path d="M6.5 8.5V6a3.5 3.5 0 0 1 7 0v2.5"></path>
              </svg>
          </span>
          <input
          id="password"
          name="password"
          type="password"
          class="form-control"
          placeholder="Inserisci la password"
          autocomplete="current-password"
          minlength="6"
                required
                />
                <button
                id="passwordToggle"
                class="btn password-toggle"
                type="button"
                aria-label="Mostra password"
                aria-pressed="false"
                >
                <svg viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M2 10s2.8-4 8-4 8 4 8 4-2.8 4-8 4-8-4-8-4Z"></path>
                    <circle cx="10" cy="10" r="2"></circle>
                </svg>
              </button>
              <div class="invalid-feedback">
                  Inserisci una password di almeno 6 caratteri.
              </div>
            </div>
            <div>

                <label for="password" class="form-label">Conferma Password</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" aria-hidden="true">
                        <svg viewBox="0 0 20 20">
                            <rect
                            x="3.5"
                      y="8.5"
                      width="13"
                      height="9"
                      rx="2"
                      ></rect>
                      <path d="M6.5 8.5V6a3.5 3.5 0 0 1 7 0v2.5"></path>
                </svg>
            </span>
            <input
            id="password"
            name="password_confirmation"
            type="password"
            class="form-control"
            placeholder="Conferma Password"
            
            minlength="6"
            required
            />
                <div class="invalid-feedback">
                    Le password non coincidono.
                </div>
            </div>
              </div>

                
                <button class="btn btn-primary login-submit w-100" type="submit">
                    <span>Accedi</span>
                    <svg viewBox="0 0 20 20" aria-hidden="true">
                  <path d="M4 10h12M12 6l4 4-4 4"></path>
                </svg>
              </button>
            </form>

            <p class="support-copy text-center mb-0">
                Hai ancora un account?
              <a class="btn btn-link login-link p-0" href="{{route('login')}}" type="button">
                Accedi</a>
            </p>
        </div>
        
        <span class="copyright">
            © 2026 Gestio · Tutti i diritti riservati
        </span>
    </section>
</div>
</main>
</x-authLayout>