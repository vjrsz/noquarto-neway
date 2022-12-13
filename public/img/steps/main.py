import os

form = ['LS 03 - ', 'LS 04 - ']
#form = ['LS 03 ', 'LS 04 ']
spa = ['Forma sem cor - com spa', 'Forma sem cor - sem spa']
#spa = ['Forma - com spa - ', 'Forma - sem spa - ']

form2 = ['ls-', 'ls-']
spa2 = ['si', 'no']

for f2, f in enumerate(form):
    for s2, s in enumerate(spa):
                    file = f + s +   '.jpg'
                    if (os.path.exists(file)):
                        os.rename(file, form2[f2] + spa2[s2] + '.jpg')

"""
form = ['LS 03 - ', 'LS 04 - ']
#form = ['LS 03 ', 'LS 04 ']
#spa = ['Forma sem cor com spa - ', 'Forma sem cor sem spa - ']
spa = ['Forma - com spa - ', 'Forma - sem spa - ']
border = ['borda bege - ', 'borda marfim - ', 'borda cinza - ']
azulejo = ['azulejo azul - ', 'azulejo cinza - ', 'azulejo roxo - ']
# plaster = ['plaster azul claro', 'plaster azul escuro', 'plaster charcoal']
plaster = ['plaster azul claro - ', 'plaster azul escuro - ', 'plaster charcoal - ']
deck = ['deck bege', 'deck marrom', 'deck cinza']

form2 = ['ls-', 'ls-']
spa2 = ['si-', 'no-']
border2 = ['bb-', 'bm-', 'bc-']
azulejo2 = ['aa-', 'ac-', 'ar-']
plaster2 = ['pac-', 'pae-', 'pc-']
deck2 = ['db', 'dm', 'dc']

for f2, f in enumerate(form):
    for s2, s in enumerate(spa):
        for b2, b in enumerate(border):
            for a2, a in enumerate(azulejo):
                for p2, p in enumerate(plaster):
                    for d2, d in enumerate(deck):
                        file = f + s + b + a + p + d + '.jpg'
                        if (os.path.exists(file)):
                            os.rename(file, form2[f2] + spa2[s2] + border2[b2] + azulejo2[a2] + plaster2[p2] + deck2[d2] + '.jpg')
"""