<template>
  <div class="layout">
    <div class="content">
      <profile-section></profile-section>
      <main-content></main-content>
    </div>
  </div>
</template>

<script>
import ProfileSection from './components/ProfileSection.vue';
import MainContent from './components/MainContent.vue';

export default {
  components: {
    ProfileSection,
    MainContent
  },
};
</script>

<style lang="scss">
#app {
  font-family: 'Montserrat', sans-serif;
  color: #000;
}

body {
  margin: 0;
  padding: 0;
}

a {
  text-decoration: none;
}

h2 {
  text-transform: uppercase;
  font-size: 19px;
  font-weight: 700;
  letter-spacing: 0.5px;

  @media (max-width: 950px) {
    font-size: 16px;
  }

  @media (max-width: 886px) {
    font-size: 14px;
  }
}

.layout {
  .content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    background: linear-gradient(180deg, rgba(255, 200, 3, 0.5) 16%, rgba(0, 194, 255, 0.5) 100%);
    height: 100%;

    @media (max-width: 480px) {
      grid-template-columns: 1fr;
    }
  }
}
</style>
