document.addEventListener('DOMContentLoaded', function () {
  var nav = document.querySelector('.nav');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 10) nav.classList.add('scrolled');
    else nav.classList.remove('scrolled');
  });

  var burger = document.querySelector('.nav__hamburger');
  var mobile = document.querySelector('.nav__mobile');
  if (burger && mobile) {
    burger.addEventListener('click', function () {
      mobile.classList.toggle('open');
    });
    mobile.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { mobile.classList.remove('open'); });
    });
  }

  document.querySelectorAll('.faq-item').forEach(function (item) {
    var q = item.querySelector('.faq-q');
    q.addEventListener('click', function () {
      var wasOpen = item.classList.contains('open');
      item.parentNode.querySelectorAll('.faq-item').forEach(function (i) { i.classList.remove('open'); });
      if (!wasOpen) item.classList.add('open');
    });
  });

  var mobileTabs = document.querySelectorAll('.smt-btn');
  if (mobileTabs.length) {
    var isMobile = function () { return window.innerWidth <= 980; };
    var currentServiceId = null;

    var activateServiceSection = function (targetId, scrollToTop) {
      if (!isMobile()) return;
      currentServiceId = targetId;
      document.querySelectorAll('.service-section').forEach(function (s) { s.classList.remove('active'); });
      mobileTabs.forEach(function (b) { b.classList.remove('active'); });
      var targetSection = document.getElementById(targetId);
      if (targetSection) targetSection.classList.add('active');
      var targetBtn = document.querySelector('.smt-btn[data-target="' + targetId + '"]');
      if (targetBtn) targetBtn.classList.add('active');
      if (scrollToTop) {
        var tabsEl = document.querySelector('.services-mobile-tabs');
        var top = tabsEl ? tabsEl.getBoundingClientRect().bottom + window.scrollY - 90 : 0;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    };

    var initMobileTabs = function () {
      if (!isMobile()) {
        document.querySelectorAll('.service-section').forEach(function (s) { s.classList.remove('active'); });
        return;
      }
      var hash = location.hash.replace('#', '');
      var initialTarget = currentServiceId || (hash && document.getElementById(hash) ? hash : mobileTabs[0].dataset.target);
      activateServiceSection(initialTarget, false);
    };

    initMobileTabs();
    window.addEventListener('resize', initMobileTabs, { passive: true });

    mobileTabs.forEach(function (btn) {
      btn.addEventListener('click', function () { activateServiceSection(btn.dataset.target, true); });
    });
  }

  var serviceSections = document.querySelectorAll('.service-section[id]');
  var sidebarLinks = document.querySelectorAll('.services-nav a');
  if (serviceSections.length && 'IntersectionObserver' in window) {
    var secObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var id = e.target.id;
          sidebarLinks.forEach(function (a) {
            a.classList.toggle('active', a.getAttribute('href') === '#' + id);
          });
        }
      });
    }, { rootMargin: '-30% 0px -60% 0px' });
    serviceSections.forEach(function (s) { secObserver.observe(s); });
  }

  var form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var msg = document.getElementById('form-msg');
      var btn = form.querySelector('button[type="submit"]');
      btn.disabled = true;
      btn.textContent = 'Odesílám…';
      fetch('/send-contact.php', { method: 'POST', body: new FormData(form) })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          msg.classList.remove('ok', 'err');
          if (data.ok) {
            msg.textContent = 'Děkujeme, Vaše poptávka byla úspěšně odeslána. Ozveme se Vám co nejdříve.';
            msg.classList.add('ok', 'show');
            form.reset();
          } else {
            msg.textContent = data.msg || 'Došlo k chybě při odesílání. Zkuste to prosím znovu.';
            msg.classList.add('err', 'show');
          }
        })
        .catch(function () {
          msg.classList.remove('ok');
          msg.textContent = 'Došlo k chybě při odesílání. Zkuste to prosím znovu.';
          msg.classList.add('err', 'show');
        })
        .finally(function () {
          btn.disabled = false;
          btn.textContent = 'Odeslat poptávku';
        });
    });
  }
});
