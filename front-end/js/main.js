const { createApp } = Vue;

createApp({
	data() {
		return {
			disks: {
				title: "",
				author: "",
				year: "",
				poster: "",
				genre: "",
			},
		};
	},

	methods: {
		getDisks() {
			axios.get("http://localhost/PHP_Dischi_JSON/back-end/data/dischi_json.json").then((response) => {
				console.log(response);
				this.disks = response;
			});
		},
	},

	mounted() {
		this.getDisks();
	},
}).mount("#app");
