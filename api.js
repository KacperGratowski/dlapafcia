// const url = 'https://bb29-77-222-242-214.ngrok.io/api';

const testObject = {
	"_CoronaCreeper_": 10,
	"lon21": 5
};

(async () => {
	// const response = await fetch(url);
	// const json = await response.json();
	json = testObject;
	const players = [];
	for await (const player of Object.keys(json))
		players.push({ nick: player, lives: json[player] });

	const parent = document.getElementById('players');

	for await (const player of players) {
		const div = document.createElement('div');
		div.className = 'player';
		div.innerHTML = `<p><img src="https://mc-heads.net/avatar/${player.nick}/"> ${player.nick}: ${player.lives} <img src="../images/heart.png" alt="serce"></p>`;
		parent.appendChild(div);
	}
})();