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

---

### Cuidado: las demostraciones anteriores tienen infinitos o divisiones por cero.

**si $v = c$, la expresión usual del factor de Lorentz $\gamma = \frac{1}{\sqrt{1 - v^2/c^2}}$ es una indeterminación del tipo $\frac{1}{0}$**. Por tanto, definir $E = \gamma m c^2$ y $p = \gamma m v$ e intentar cancelar las $\gamma$ mediante una división informal plantea un problema riguroso si partimos de esa base.

Para hacer la demostración **impecable y matemáticamente válida sin incurrir en indeterminaciones**, la física teórica no define $E$ y $p$ a través de $\gamma$ para partículas sin masa, sino mediante el **tiempo propio ($\tau$)** o la **relación espacio-temporal del cuadrimomento**.

Aquí tienes el razonamiento correcto y sin ambigüedades:

---

### Demostración 3: La corrección rigurosa: El Cuadrimomento y el Tiempo Propio

Para una partícula masiva con trayectoria $x^\mu(\tau)$, la tetravelocidad se define como $U^\mu = \frac{dx^\mu}{d\tau}$, donde $d\tau$ es el intervalo de **tiempo propio** medido por el reloj de la propia partícula:

$$d\tau = \sqrt{1 - \frac{v^2}{c^2}} \, dt = \frac{dt}{\gamma}$$

El cuadrimomento $P^\mu$ se define como:

$$P^\mu = m U^\mu = m \left( \frac{dx^0}{d\tau}, \frac{d\vec{x}}{d\tau} \right) = \left( \frac{E}{c}, \vec{p} \right)$$

De aquí provienen las expresiones $E = \gamma m c^2$ y $\vec{p} = \gamma m \vec{v}$.

#### ¿Qué ocurre cuando $m = 0$?

Para una partícula sin masa, $v = c$. El tiempo propio entre dos eventos separados por un intervalo de luz es:

$$d\tau^2 = dt^2 - \frac{dx^2 + dy^2 + dz^2}{c^2} = 0$$

Una partícula sin masa **no experimenta tiempo propio** ($d\tau = 0$). Por lo tanto, intentar usar el tiempo propio $\tau$ o el factor $\gamma = \frac{dt}{d\tau}$ produce una indeterminación matemática ($\infty \cdot 0$).

---

### La demostración correcta (sin usar $\gamma$)

Para evitar la indeterminación, debemos usar un **parámetro afín $\lambda$** en lugar del tiempo propio $\tau$ para parametrizar la trayectoria $x^\mu(\lambda)$.

#### 1. Definición del Cuadrimomento Afín

El cuadrimomento $P^\mu$ de cualquier partícula (con o sin masa) es un vector bien definido en el espacio-tiempo de Minkowski:

$$P^\mu = \left( \frac{E}{c}, \vec{p} \right)$$

Donde la velocidad física medida por un observador inercial es, por definición cinemática diferencial:

$$\vec{v} = \frac{d\vec{x}}{dt}$$

#### 2. La regla de la cadena espacio-temporal

Sustituyendo el parámetro afín $\lambda$:

$$\vec{p} = \frac{d\vec{x}}{d\lambda} = \frac{d\vec{x}}{dt} \frac{dt}{d\lambda} = \vec{v} \left( \frac{dt}{d\lambda} \right)$$

$$\frac{E}{c} = \frac{dx^0}{d\lambda} = c \frac{dt}{d\lambda} \implies \frac{E}{c^2} = \frac{dt}{d\lambda}$$

Al dividir la componente espacial ($\vec{p}$) entre la componente temporal multiplicada por $c$ ($\frac{E}{c^2}$), la derivada $\frac{dt}{d\lambda}$ se cancela **sin ninguna indeterminación**:

$$\frac{\vec{p}}{E/c^2} = \frac{\vec{v} \left( \frac{dt}{d\lambda} \right)}{\frac{dt}{d\lambda}} \implies \vec{v} = \frac{\vec{p} c^2}{E}$$

*(Observa que aquí nunca ha aparecido $\gamma$ ni se ha dividido por cero).*

#### 3. Aplicación de la norma del norma del vector

La norma del cuadrimomento es un **invariante de Lorentz** proporcional a la masa:

<div>
$$P_\mu P^\mu = \eta_{\mu\nu} P^\mu P^\nu = -\left(\frac{E}{c}\right)^2 + \Vert{}\vec{p}\Vert{}^2 = -m^2 c^2$$
</div>

Multiplicando toda la ecuación por $-c^2$:

$$E^2 - \Vert{}\vec{p}\Vert{}^2 c^2 = m^2 c^4$$

Si la masa es nula ($m = 0$):

$$E^2 - \Vert{}\vec{p}\Vert{}^2 c^2 = 0 \implies E = \Vert{}\vec{p}\Vert{} c$$

#### 4. Sustitución final

Insertando $E = \Vert{}\vec{p}\Vert{} c$ en el módulo de la velocidad obtenida en el paso 2:

$$\Vert{}\vec{v}\Vert{} = \frac{\Vert{}\vec{p}\Vert{} c^2}{E} = \frac{\Vert{}\vec{p}\Vert{} c^2}{\Vert{}\vec{p}\Vert{} c} = c$$

$$\mathbf{\Vert{}\vec{v}\Vert{} = c}$$

---

### Resumen del matiz

* Usar $\gamma = \frac{1}{\sqrt{1-v^2/c^2}}$ es una simplificación divulgativa que genera un bucle de indeterminación ($\infty \cdot 0$).
* En física formal, las partículas sin masa no tienen factor $\gamma$ porque no tienen tiempo propio. Se describen directamente por un **cuadrimomento nulo** ($P_\mu P^\mu = 0$), del cual se deduce la relación $E = pc$ y la velocidad $v = c$ de forma rigurosa y libre de divisiones por cero.