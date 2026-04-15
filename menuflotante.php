   <!-- Menú Flotante (FAB) -->
   <div class="fab-container" id="fabContainer">

<div class="fab-panel" id="fabPanel" aria-hidden="true">
    <nav class="fab-nav-links">
        <a href="#inicio" class="fab-link" data-close>Inicio</a>
        <a href="#rector" class="fab-link" data-close>Palabras del Rector</a>
        <a href="#video" class="fab-link" data-close>Video del Acto</a>
        <a href="#programa" class="fab-link" data-close>Programa</a>
        <a href="#egresados" class="fab-link" data-close>Egresados</a>
    </nav>
</div>

<div class="fab-travel" id="fabTravel" aria-hidden="true">
    <button class="fab-travel-btn" id="btnTravelUp" aria-label="Ir arriba">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="18 15 12 9 6 15" />
        </svg>
    </button>
    <button class="fab-travel-btn" id="btnTravelDown" aria-label="Ir abajo">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </button>
</div>

<button class="fab-trigger" id="fabTrigger" aria-label="Abrir menú" aria-expanded="false"
    aria-controls="fabPanel">
    <span class="fab-icon fab-icon--open">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="6" x2="21" y2="6" />
            <line x1="3" y1="12" x2="21" y2="12" />
            <line x1="3" y1="18" x2="21" y2="18" />
        </svg>
    </span>
    <span class="fab-icon fab-icon--close">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
    </span>
    <span class="fab-label">MENÚ</span>
</button>
</div>

