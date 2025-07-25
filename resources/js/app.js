import "../css/app.css"

// Import libraries
import Swal from "sweetalert2"
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { TextPlugin } from "gsap/TextPlugin"
import { ScrollToPlugin } from "gsap/ScrollToPlugin"
import AOS from "aos"
import "aos/dist/aos.css"

// Make Swal globally available
window.Swal = Swal

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, TextPlugin, ScrollToPlugin)

// Animation and interaction functions
class AppAnimations {
  constructor() {
    this.isInitialized = false
    this.init()
  }

  init() {
    // Wait for DOM to be ready
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", () => this.initializeAnimations())
    } else {
      this.initializeAnimations()
    }

    // Handle Livewire navigation
    document.addEventListener("livewire:navigated", () => {
      this.reinitialize()
    })
  }

  initializeAnimations() {
    if (this.isInitialized) return

    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true,
      offset: 100,
      disable: "mobile", // Disable on mobile for better performance
    })

    // Initialize all animations
    this.initHeroAnimations()
    this.initTypewriterEffect()
    this.initSkillBars()
    this.initCounters()
    this.initStaggerAnimations()
    this.initMagneticButtons()
    this.initProfileCircle()
    this.initNavLinks()
    this.initMatrixEffect()
    this.initMobileMenu()
    this.initSmoothScrolling()
    this.initFloatingElements()
    this.initSectionAnimations()
    this.initThemeManager()
    this.initResizeHandler()
    this.isInitialized = true
  }

  reinitialize() {
    // Clean up previous animations
    ScrollTrigger.getAll().forEach((trigger) => trigger.kill())

    // Reinitialize
    this.isInitialized = false
    setTimeout(() => this.initializeAnimations(), 100)
  }

  initHeroAnimations() {
    const heroTitle = document.querySelector(".hero-title")
    const heroSubtitle = document.querySelector(".hero-subtitle")
    const heroDescription = document.querySelector(".hero-description")
    const heroButtons = document.querySelector(".hero-buttons")

    if (!heroTitle) return

    const heroTl = gsap.timeline()
    heroTl
      .from(heroTitle, {
        duration: 1.5,
        y: 100,
        opacity: 0,
        ease: "power3.out",
      })
      .from(
        heroSubtitle,
        {
          duration: 1,
          y: 50,
          opacity: 0,
          ease: "power2.out",
        },
        "-=0.8",
      )
      .from(
        heroDescription,
        {
          duration: 1,
          y: 30,
          opacity: 0,
          ease: "power2.out",
        },
        "-=0.6",
      )
      .from(
        heroButtons,
        {
          duration: 1,
          y: 30,
          opacity: 0,
          ease: "power2.out",
        },
        "-=0.4",
      )
  }

  initTypewriterEffect() {
    const typewriterText = document.querySelector(".typewriter-text")
    if (!typewriterText) return

    gsap.to(typewriterText, {
      duration: 2,
      text: "Web & App Developmen",
      ease: "none",
      repeat: -18,
      yoyo: true,
      repeatDelay: 2,
    })
  }

  initSkillBars() {
    gsap.utils.toArray(".skill-progress").forEach((bar) => {
      const width = bar.getAttribute("data-width")
      if (!width) return

      gsap.set(bar, { width: "0%" })

      ScrollTrigger.create({
        trigger: bar,
        start: "top 80%",
        onEnter: () => {
          gsap.to(bar, {
            width: width + "%",
            duration: 1.5,
            ease: "power2.out",
          })
        },
      })
    })
  }

  initCounters() {
    gsap.utils.toArray(".counter").forEach((counter) => {
      const target = Number.parseInt(counter.getAttribute("data-target"))
      if (!target) return

      ScrollTrigger.create({
        trigger: counter,
        start: "top 80%",
        onEnter: () => {
          gsap.to(counter, {
            innerHTML: target,
            duration: 2,
            ease: "power2.out",
            snap: { innerHTML: 1 },
          })
        },
      })
    })
  }

  initStaggerAnimations() {
    gsap.utils.toArray(".stagger-animation").forEach((element, index) => {
      ScrollTrigger.create({
        trigger: element,
        start: "top 85%",
        onEnter: () => {
          gsap.to(element, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: index * 0.1,
            ease: "power2.out",
          })
        },
      })
    })
  }

  initMagneticButtons() {
    gsap.utils.toArray(".magnetic-button").forEach((button) => {
      const handleMouseEnter = () => {
        gsap.to(button, {
          scale: 1.05,
          duration: 0.3,
          ease: "power2.out",
        })
      }

      const handleMouseLeave = () => {
        gsap.to(button, {
          scale: 1,
          duration: 0.3,
          ease: "power2.out",
        })
      }

      button.addEventListener("mouseenter", handleMouseEnter)
      button.addEventListener("mouseleave", handleMouseLeave)
    })
  }

  initProfileCircle() {
    const profileCircle = document.querySelector(".profile-circle")
    if (!profileCircle) return

    gsap.to(profileCircle, {
      rotation: 360,
      duration: 20,
      ease: "none",
      repeat: -1,
    })
  }

  initNavLinks() {
    gsap.utils.toArray(".nav-link").forEach((link) => {
      const handleMouseEnter = () => {
        gsap.to(link, {
          scale: 1.1,
          duration: 0.3,
          ease: "power2.out",
        })
      }

      const handleMouseLeave = () => {
        gsap.to(link, {
          scale: 1,
          duration: 0.3,
          ease: "power2.out",
        })
      }

      link.addEventListener("mouseenter", handleMouseEnter)
      link.addEventListener("mouseleave", handleMouseLeave)
    })
  }

  initMatrixEffect() {
    const matrixBg = document.getElementById("matrix-bg")
    if (!matrixBg) return

    // English letters and numbers for matrix effect
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?"

    // Clear existing matrix chars
    matrixBg.innerHTML = ""

    // Reduce number of characters on mobile for better performance
    const isMobile = window.innerWidth <= 768
    const charCount = isMobile ? 20 : 50

    for (let i = 0; i < charCount; i++) {
      const char = document.createElement("div")
      char.className = "matrix-char"
      char.textContent = chars[Math.floor(Math.random() * chars.length)]
      char.style.left = Math.random() * 100 + "%"
      char.style.animationDelay = Math.random() * 20 + "s"
      char.style.animationDuration = Math.random() * 10 + 10 + "s"

      // Ensure characters stay within viewport bounds
      char.style.position = "absolute"
      char.style.maxWidth = "20px"
      char.style.overflow = "hidden"

      matrixBg.appendChild(char)
    }
  }

  initMobileMenu() {
    const mobileMenuBtn = document.getElementById("mobile-menu-btn")
    const mobileMenu = document.getElementById("mobile-menu")

    if (!mobileMenuBtn || !mobileMenu) return

    const toggleMenu = () => {
      mobileMenu.classList.toggle("hidden")

      if (!mobileMenu.classList.contains("hidden")) {
        gsap.utils.toArray("#mobile-menu .stagger-animation").forEach((item, index) => {
          gsap.fromTo(
            item,
            {
              opacity: 0,
              y: 20,
            },
            {
              opacity: 1,
              y: 0,
              duration: 1.5,
              delay: index * 0.1,
              ease: "power2.out",
            },
          )
        })
      }
    }

    mobileMenuBtn.addEventListener("click", toggleMenu)

    // Close mobile menu when clicking on links
    document.querySelectorAll("#mobile-menu a").forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden")
      })
    })
  }

  initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault()
        const target = document.querySelector(this.getAttribute("href"))
        if (target) {
          gsap.to(window, {
            duration: 1,
            scrollTo: {
              y: target,
              offsetY: 80,
            },
            ease: "power2.inOut",
          })
        }
      })
    })
  }

  initFloatingElements() {
    gsap.utils.toArray(".floating-element").forEach((element, index) => {
      gsap.to(element, {
        y: -30,
        duration: 3 + index,
        ease: "power1.inOut",
        repeat: -1,
        yoyo: true,
        delay: index * 0.5,
      })
    })
  }

  initSectionAnimations() {
    gsap.utils.toArray("section").forEach((section) => {
      ScrollTrigger.create({
        trigger: section,
        start: "top 80%",
        onEnter: () => {
          gsap.fromTo(
            section,
            {
              opacity: 0,
              y: 50,
            },
            {
              opacity: 1,
              y: 0,
              duration: 1,
              ease: "power2.out",
            },
          )
        },
      })
    })
  }
  
  initResizeHandler() {
    let resizeTimeout
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimeout)
      resizeTimeout = setTimeout(() => {
        // Reinitialize matrix effect on resize
        this.initMatrixEffect()
      }, 250)
    })
  }
  initThemeManager() {
    this.themeManager = new ThemeManager()
  }

  
}

// Theme Management Class
class ThemeManager {
  constructor() {
    this.currentTheme = localStorage.getItem("theme") || "dark"
    this.init()
  }

  init() {
    this.applyTheme(this.currentTheme)
    this.setupEventListeners()
  }

  setupEventListeners() {
    const desktopToggle = document.getElementById("themeToggle")
    const mobileToggle = document.getElementById("mobileThemeToggle")

    if (desktopToggle) {
      desktopToggle.addEventListener("click", () => this.toggleTheme())
    }

    if (mobileToggle) {
      mobileToggle.addEventListener("click", () => this.toggleTheme())
    }
  }

  toggleTheme() {
    const newTheme = this.currentTheme === "dark" ? "light" : "dark"
    this.setTheme(newTheme)
  }

  setTheme(theme) {
    this.currentTheme = theme
    localStorage.setItem("theme", theme)
    this.applyTheme(theme)
    this.animateThemeTransition()
  }

  applyTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme)
    this.updateToggleIcons(theme)
    this.updateMatrixEffect(theme)
  }

  updateToggleIcons(theme) {
    const desktopIcon = document.getElementById("sliderIcon")
    const mobileIcon = document.getElementById("mobileSliderIcon")

    const icon = theme === "light" ? "☀️" : "🌙"

    if (desktopIcon) desktopIcon.textContent = icon
    if (mobileIcon) mobileIcon.textContent = icon
  }

  updateMatrixEffect(theme) {
    const matrixChars = document.querySelectorAll(".matrix-char")
    matrixChars.forEach((char) => {
      char.style.opacity = theme === "light" ? "0.05" : "0.1"
    })
  }

  animateThemeTransition() {
    const overlay = document.getElementById("themeTransition")
    if (!overlay) return

    gsap.to(overlay, {
      opacity: 0.1,
      duration: 0.3,
      ease: "power2.out",
      onComplete: () => {
        gsap.to(overlay, {
          opacity: 0,
          duration: 0.3,
          delay: 0.2,
          ease: "power2.out",
        })
      },
    })

    const sliders = document.querySelectorAll(".theme-toggle-slider")
    sliders.forEach((slider) => {
      gsap.to(slider, {
        scale: 1.2,
        duration: 0.2,
        yoyo: true,
        repeat: 1,
        ease: "power2.inOut",
      })
    })
  }
}



// Initialize the application
const app = new AppAnimations()


export { AppAnimations, ThemeManager}
