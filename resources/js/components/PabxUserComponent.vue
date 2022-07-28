<template>
  <div id="app">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <main>

      <data-table v-bind="table_servers" @actionTriggered="handleAction" />

    </main>
  </div>
</template>

<style lang="css">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

main {
  padding: 32px;
}
</style>

<script>

export default {
  data() {
    return { serversdata: [] }
  },
  name: "ActionButtons",

  computed: {
    table_servers() {
      return {
        data: this.serversdata,
        actionMode: "single",
        actions: ["edit", "delete"],
        columns: [
          {
            key: "id",
            title: "ID"
          },
          {
            key: "name",
            title: "Nome do Usuário"
          },
          {
            key: "user",
            title: "Usuário"
          },
          {
            key: "acess",
            title: "Acesso"
          },
          {
            key: "pj",
            title: "Acesso a PJ?"
          },
          {
            key: "samu",
            title: "Acesso a Samu?"
          },
          {
            key: "created_by",
            title: "Criador"
          },
        ]
      };
    },
  },

  methods: {


    handleAction(actionName, data) {
      console.log(actionName, data);
      switch (actionName) {
        case 'edit':
          window.alert("delete");

        case 'delete':
          window.alert("delete");
          break;
      }
    },
    showServers: async function () {

      await axios.get('/ShowPabxUsers').then(function (res) {
        this.serversdata = res.data;
        console.log(res.data)
      }.bind(this));
    }
  },
  created() {

    this.showServers()
  },

};
</script>
