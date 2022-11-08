export default class PokemonTemplate {  
    pokemonFilter(types) {
        let html = `
            <div>
                <button class="is-selected" data-pokemon-type="all" data-selected>All</button>
            </div>`;

        for (const type of types) {
            const loweredCaseType = type.english.toLowerCase();
            html += `
                <div>
                    <button data-pokemon-type=${loweredCaseType}>${type.english}</button>
                </div>`;
        }
        return html;
    }

    pokemonList(pokemons, maxCount = 151) {
        let html = "";
        let count = 1;
        for (const pokemon of pokemons) {
            const formattedId = formatId(pokemon.id);
            html += `
                <div class="pokemon" data-pokemon="${pokemon.name.english}" data-pokemon-id="${pokemon.id}" data-pokemon-types="${pokemon.type}">
                    <figure>
                        <img loading="lazy" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${formattedId}.png" alt="${pokemon.name.english}">
                    </figure>
                    <div class="pokemon-info">
                        <span>#${formattedId}</span>
                        <h4>${pokemon.name.english}</h4>
                        ${this.pokemonTypes(pokemon.type)}
                    </div>
                </div>`;
            if (count >= maxCount) {
                break;
            }
            count++;
        }
        return html;
    }

    pokemonTypes(types) {
        let html = `<div class="types">`;
        for (const type of types) {
            const loweredCaseType = type.toLowerCase();
            html += `<span class="${loweredCaseType}-type">${type}</span>`;
        }
        html += `</div>`;
        return html;
    }

    pokemonDetails(pokemon) {
        const formattedId = formatId(pokemon.id);
        return `
            <h3>${pokemon.name}</h3>
            <img loading="lazy" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${formattedId}.png" alt="${pokemon.name}">
        `;    
    }
}

function formatId(id) {
    return id?.toString().padStart(3, "0");
}