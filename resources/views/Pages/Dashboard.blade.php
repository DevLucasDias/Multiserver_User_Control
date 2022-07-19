<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>vue3-easy-data-table</title>
    <link
      href="https://unpkg.com/vue3-easy-data-table/dist/style.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="app">
      <easy-data-table
        buttons-pagination
        alternating
        :headers="headers"
        :items="items"
        @click-row="showRow"
      />
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/vue@3.2.1/dist/vue.global.js"></script>
  <script src="https://unpkg.com/vue3-easy-data-table"></script>

  <script>
    const mockClientItems = users.map(atribute) 

    function atribute(){
        itens = ['name'=> 'Lucas',
        'ipadress'=>  '192.168.0.1',
        'created_by'=> 'Lucas'
        ];
        return itens;
       }

    const { createApp, ref } = Vue;

    const App = {
      components: { EasyDataTable: window["vue3-easy-data-table"] },
      setup() {
        const headers = [
          { text: "Name", value: "name", width: 150, fixed: true },
          { text: "Address", value: "address", width: 200 },
        ];
        const items = ref(mockClientItems());
        const showRow = (item) => {
          alert(JSON.stringify(item));
        };
        return {
          headers,
          items,
          showRow
        };
      }
    };

    createApp(App).mount("#app");
  </script>
</html>
