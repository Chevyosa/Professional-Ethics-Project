document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.nav-link');
  const currentPage = window.location.pathname.split('/').pop();

  navLinks.forEach(link => {
    const linkPage = link.getAttribute('href').split('/').pop();
    if (linkPage === currentPage) {
      link.classList.add('active');
    }
  });

  navLinks.forEach(link => {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      navLinks.forEach(navLink => navLink.classList.remove('active'));
      this.classList.add('active');
      const targetId = this.getAttribute('id');
      navigateToPage(targetId);
    });
  });

  function navigateToPage(pageId) {
    const pageMappings = {
      'home': 'index.html',
      'faq': 'faqPage.html',
      // Add more mappings as needed
    };
    const targetUrl = pageMappings[pageId];
    if (targetUrl) {
      window.location.href = targetUrl;
    } else {
      console.error(`Target URL not defined for link ID: ${pageId}`);
    }
  }

  const lottieAboutUsContainer = document.getElementById('lottie-about-us');
  lottie.loadAnimation({
    container: lottieAboutUsContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'animations/aboutUsAnimation.json',
  });

  const lottieHeroContainer = document.getElementById('lottie-animation');
  lottie.loadAnimation({
    container: lottieHeroContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'animations/heroAnimation.json',
  });

  const lottieFeaturePointContainer = document.getElementById('lottie-feature-point');
  lottie.loadAnimation({
    container: lottieFeaturePointContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'animations/featurePointAnimation.json',
  });
});
