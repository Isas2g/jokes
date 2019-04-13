const info = document.getElementById('info');
    const hotels = document.getElementById('hotels');
    const costs = document.getElementById('costs');
    const photo = document.getElementById('photo');
        
    const infoText = document.getElementById('infoText');
    const hotelsText = document.getElementById('hotelsText');
    const costsText = document.getElementById('costsText');
    const photoText = document.getElementById('photoText');
            
        info.addEventListener('click', () => {
            infoText.classList.remove('non-active');
            infoText.classList.add('active');
            hotelsText.classList.remove('active');
            hotelsText.classList.add('non-active');
            costsText.classList.remove('active');
            costsText.classList.add('non-active');
            photoText.classList.remove('active');
            photoText.classList.add('non-active');
            info.classList.add('active-menu-el');
            hotels.classList.remove('active-menu-el');
            costs.classList.remove('active-menu-el');
            photo.classList.remove('active-menu-el');
            
        });
        
        hotels.addEventListener('click', () => {
            infoText.classList.add('non-active');
            infoText.classList.remove('active');
            hotelsText.classList.add('active');
            hotelsText.classList.remove('non-active');
            costsText.classList.remove('active');
            costsText.classList.add('non-active');
            photoText.classList.remove('active');
            photoText.classList.add('non-active');
            info.classList.remove('active-menu-el');
            hotels.classList.add('active-menu-el');
            costs.classList.remove('active-menu-el');
            photo.classList.remove('active-menu-el');
        });
        
        costs.addEventListener('click', () => {
            infoText.classList.add('non-active');
            infoText.classList.remove('active');
            hotelsText.classList.remove('active');
            hotelsText.classList.add('non-active');
            costsText.classList.add('active');
            costsText.classList.remove('non-active');
            photoText.classList.remove('active');
            photoText.classList.add('non-active');
            info.classList.remove('active-menu-el');
            hotels.classList.remove('active-menu-el');
            costs.classList.add('active-menu-el');
            photo.classList.remove('active-menu-el');
        });
        
        photo.addEventListener('click', () => {
            infoText.classList.add('non-active');
            infoText.classList.remove('active');
            hotelsText.classList.remove('active');
            hotelsText.classList.add('non-active');
            costsText.classList.remove('active');
            costsText.classList.add('non-active');
            photoText.classList.add('active');
            photoText.classList.remove('non-active');
            info.classList.remove('active-menu-el');
            hotels.classList.remove('active-menu-el');
            costs.classList.remove('active-menu-el');
            photo.classList.add('active-menu-el');
        });