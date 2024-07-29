import { createMongoAbility } from '@casl/ability'
import { abilitiesPlugin } from '@casl/vue'

export default function (app) {
  // lấy dữ liệu quy tắc từ cookie
  const userAbilityRules = useCookie('userAbilityRules')
  // Khởi tạo CASL với initialAbility
  const initialAbility = createMongoAbility(userAbilityRules.value ?? [])

  app.use(abilitiesPlugin, initialAbility, {
    useGlobalProperties: true,
  })
}
