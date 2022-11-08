export function qs(selectorOrElement, scope) {
    if (typeof(selectorOrElement) === "string") {
        return (scope || document).querySelector(selectorOrElement);
    } else {
        // Assume it's a single element, put it an array and return
        return [selectorOrElement];
    }
}

export function qsa(selectorOrElements, scope) {
    if (typeof(selectorOrElements) === "string") {
        return (scope || document).querySelectorAll(selectorOrElements);
    } else if (Array.isArray(selectorOrElements)) {
        return selectorOrElements;
    } else {
        // Assume it's a single element, put it an array and return
        return [selectorOrElements];
    }
}