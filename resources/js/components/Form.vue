<template>
  <div class="center">
    <div>
      <div v-for="item in data" :key="item">
        <h2>Otázka č. {{ item.id }}</h2>
        <div>
          {{ item.typ }}

          <template v-for="odpoved in item.odpovede" :key="odpoved">
            <p v-if="odpoved.typ == 'spravne'" style="color:green">{{ odpoved.odpoved }}</p>
            <p v-else style="color:red">{{ odpoved.odpoved }}</p>
          </template>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
var data = [
  {
    "id": 1,
    "nazov": "Otazka???",
    "typ": 1,
    "odpovede": [
      {"odpoved": "Odpoved 1","typ": "spravne"},
      {"odpoved": "Odpoved 2","typ": "nespravne"},
    ]
  },
  {
    "id": 2,
    "nazov": "Otazka???",
    "typ": 2,
    "odpovede": [
      {"odpoved": "Odpoved 1","typ": "spravne"},
      {"odpoved": "Odpoved 2","typ": "nespravne"},
    ]
  }
];

export default {
  data() {
    return {
      data: data
    }
  }
}
</script>


<style scoped>
  .center {
    margin: auto;
    margin-top: 20%;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    border-radius: 3px;
  }
</style>