import * as mdb from "mdb-ui-kit";

const getSectionsOffset = (navbarHref) => {
  let sectionsOffset = {};

  for (let i in navbarHref) {
    if (typeof navbarHref[i].getAttribute == "function") {
      sectionsOffset[navbarHref[i].getAttribute("href")] = {
        offsetTop: document.querySelector(navbarHref[i].getAttribute("href"))
          .offsetTop,
        menuItem: navbarHref[i],
      };
    }
  }

  return sectionsOffset;
};

const setMenuActive = (sectionsOffset) => {
  let current;
  let topMax = 0;

  for (let i in sectionsOffset) {
    if (
      window.scrollY + 50 >= sectionsOffset[i].offsetTop &&
      topMax <= sectionsOffset[i].offsetTop
    ) {
      current = i;
      topMax = sectionsOffset[i].offsetTop;
    }
  }

  for (let j in sectionsOffset) {
    if (j != current) {
      sectionsOffset[j].menuItem.classList.remove("active");
    }
  }

  sectionsOffset[current].menuItem.classList.add("active");
  setSectionActive(current);
};

const setNavbarStyle = () => {
  const firstSectionWraper = document.querySelector(".section-wraper");

  if (firstSectionWraper) {
    // Check navbar styles

    if (firstSectionWraper.offsetHeight <= window.scrollY + 50) {
      const navbar = document.querySelector("#header .navbar.bg-transparent");
      if (navbar) {
        navbar.classList.remove("bg-transparent");
      }
    } else {
      const navbar = document.querySelector(
        "#header .navbar:not(.bg-transparent)"
      );
      if (navbar) {
        navbar.classList.add("bg-transparent");
      }
    }
  }
};

const setSectionActive = (id) => {
  // window.location.hash = id.replace("#", "");
};

window.addEventListener("load", () => {
  if (document.querySelector(window.location.hash)) {
    document.querySelector(window.location.hash).scrollIntoView(true);
  }

  const navbarHref = document.querySelectorAll("#header .navbar a.nav-link");

  for (let i in navbarHref) {
    if (typeof navbarHref[i].addEventListener == "function") {
        
      navbarHref[i].addEventListener("click", (e) => {
        setSectionActive(navbarHref[i].getAttribute('href'));
      });
    }
  }

  const sectionsOffset = getSectionsOffset(navbarHref);

  setMenuActive(sectionsOffset);
  setNavbarStyle();

  window.addEventListener("scroll", () => {
    // checkScroll(sectionsOffset);
    setMenuActive(sectionsOffset);
    setNavbarStyle();
  });
});
