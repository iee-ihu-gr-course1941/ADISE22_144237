# ADISE22_144237
Gakis Dimitris
Παιχνίδι : Pinnacle
Δεν έχει στηθεί το ΑΡΙ.
Στο repo υπάρχει το σκριπτ για τη δημιουργεία βάσης δεδομένων της οποίας το σχήμα θα χρησιμοποιήτε για την διεκπεραίωση του παιχνιδιού.

Βαση : 

Πινακας User 
    πεδία: name, id, handId
    
Πινακας Hand 
    πεδία: id

Πινακας Card 
    πεδία: id, color, number, handId, comboId, deckId, stack

Πινακας Combo 
    πεδία: id, userId
    
Πινακας User 
    πεδία: id
    
    
Σχέσεις πινάκων : 

Πινακας User με Hand 1:1
             με Combo N:1
             
Πινακας Hand με User 1:1
             με Caard N:1
             
Πινακας Card με Hand N:1
             με Deck N:1 
             
             
             
             
