---
Title: Las partículas sin masa van a la velocidad de la luz
Description: Las partículas sin masa van a la velocidad de la luz
---

# 📋 %meta.description%

En Relatividad Especial se puede demostrar matemáticamente que cualquier partícula cuya masa en reposo sea nula ($m = 0$) debe desplazarse a la velocidad de la luz en el vacío ($c$).

Existen dos enfoques principales para demostrarlo: el **método algebraico a través de los invariantes relativistas** (el más elegante e irrefutable) y el **análisis analítico de límites** (que muestra por qué una partícula sin masa no puede jamás frenar).

---

### Demostración 1: Mediante la relación Energía-Momento (Método Formal)

En relatividad especial, las magnitudes dinámicas de energía ($E$), momento ($p$) y masa ($m$) de un cuerpo no son independientes, sino que se unifican a través del cuadrimomento $P^\mu$.

#### 1. Las dos ecuaciones fundamentales

Para cualquier cuerpo con masa $m$ que viaja a una velocidad $v$:

$$\text{Energía total: } E = \gamma m c^2 = \frac{m c^2}{\sqrt{1 - \frac{v^2}{c^2}}}$$

$$\text{Momento lineal: } p = \gamma m v = \frac{m v}{\sqrt{1 - \frac{v^2}{c^2}}}$$

Donde $\gamma = \frac{1}{\sqrt{1 - v^2/c^2}}$ es el factor de Lorentz.

#### 2. Relación directa entre velocidad, energía y momento

Si dividimos la expresión del momento ($p$) entre la expresión de la energía ($E$):

$$\frac{p}{E} = \frac{\gamma m v}{\gamma m c^2} = \frac{v}{c^2}$$

Despejando la velocidad $v$ obtenemos la relación cinemática universal:

$$v = \frac{p c^2}{E} \quad \implies \quad \frac{v}{c} = \frac{p c}{E}$$

#### 3. Aplicación del invariante de la masa ($m=0$)

Al elevar al cuadrado y combinar las definiciones de $E$ y $p$, se obtiene la **relación de dispersión de Einstein** (válida en cualquier marco de referencia):

$$E^2 = p^2 c^2 + m^2 c^4$$

Si la partícula **no tiene masa** ($m = 0$), el segundo término desaparece por completo:

$$E^2 = p^2 c^2 \quad \implies \quad E = p c$$

*(Nota: Para una partícula que existe, su energía $E$ no puede ser cero; si $E=0$ y $m=0$, la partícula simplemente no existiría).*

#### 4. Sustitución de $E = pc$ en la fórmula de la velocidad

Sustituyendo $E = p c$ en la ecuación de la velocidad obtenida en el paso 2:

$$v = \frac{p c^2}{E} = \frac{p c^2}{p c} = c$$

$$\mathbf{v = c}$$

**Conclusión:** Para cualquier entidad física que transporte energía y momento ($E > 0, p > 0$) sin poseer masa ($m = 0$), su velocidad se ve forzada geométricamente a ser exactamente $c$.

---

### Demostración 2: Mediante el límite de la masa (Análisis Causal)

¿Qué ocurre si intentamos analizar el comportamiento de una partícula masiva conforme reducimos su masa a cero?

Partiendo de la definición de energía:

$$E = \frac{m c^2}{\sqrt{1 - \frac{v^2}{c^2}}}$$

Si evaluamos el caso donde $m \to 0$ manteniendo una velocidad menor que la luz ($v < c$):

$$\lim_{m \to 0} E = \frac{0 \cdot c^2}{\sqrt{1 - \frac{v^2}{c^2}}} = 0$$

* **Si $v < c$:** La energía total sería $0$. Una partícula con energía cero no interactúa ni existe en el espacio-tiempo.
* **Para mantener una energía real distinta de cero ($E > 0$) cuando $m \to 0$:** La única forma matemática de evitar que la energía colapse a cero es que el denominador $\sqrt{1 - v^2/c^2}$ también tienda a cero.

Para que el denominador tienda a cero:

$$1 - \frac{v^2}{c^2} \to 0 \quad \implies \quad v \to c$$

Por tanto, las partículas sin masa no pueden frenar ni estar en reposo ($v=0$): **se crean viajando a $c$ y se destruyen viajando a $c$**.

---

### Implicación geométrica en el espacio-tiempo

En el espacio-tiempo de Minkowski, el **cuadrimomento** $P^\mu$ tiene un módulo invariante dado por la norma del vector:

$$P_\mu P^\mu = -m^2 c^2$$

* Para partículas masivas ($m > 0$), la norma es negativa ($P_\mu P^\mu < 0$), lo que significa que sus trayectorias siguen **líneas del universo de tipo tiempo** (*timelike*).
* Para partículas sin masa ($m = 0$), la norma es nula ($P_\mu P^\mu = 0$), lo que significa que sus trayectorias se encuentran obligatoriamente sobre el **cono de luz** o **líneas de tipo nulo** (*lightlike*).

La propia geometría del espacio-tiempo prohíbe que una trayectoria de tipo nulo cambie de pendiente a una de tipo tiempo, obligando al fotón, gluón (u otra partícula sin masa) a moverse a la velocidad $c$ en cualquier sistema de referencia inercial.
