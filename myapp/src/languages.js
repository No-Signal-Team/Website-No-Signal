export const getAllf = async () => {
    const response = await fetch(
        'http://localhost:4444/french/list', {
            method: 'GET', 
            headers: {
                'Accept': 'application/json', 
                'Content-Type':'application/json'
            }
        }
    )
    const french = await response.json()
    return french
}

export const getAlle = async () => {
    const response = await fetch(
        'http://localhost:4444/english/list', {
            method: 'GET', 
            headers: {
                'Accept': 'application/json', 
                'Content-Type':'application/json'
            }
        }
    )
    const english = await response.json()
    return english
}